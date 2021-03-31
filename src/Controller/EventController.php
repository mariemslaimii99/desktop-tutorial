<?php

namespace App\Controller;
use App\Entity\Client;
use App\Entity\Reservation;
use App\Entity\Event;
use App\Entity\Views;
use App\Form\EventFormType;
use Dompdf\Dompdf;
use Dompdf\Options;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Endroit;
use Knp\Component\Pager\PaginatorInterface; // Nous appelons le bundle KNP Paginator


class EventController extends AbstractController
{
    /**
     * @Route("/event", name="event")
     */
    public function index(): Response
    {
        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
    /**
     * @Route("/list11",name="list11")
     */
    public function list()
    {
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles
        $list = $this->getDoctrine()->getRepository(Event::class)->findAll();
        return $this->render('event/list.html.twig', ['list' => $list]);
    }
    /**
     * @Route("/edit11/{id}", name="edit11")
     * Method({"GET", "POST"})
     */
    public function edit(Request $request, $id) {
        $Event = new Event();
        $Event = $this->getDoctrine()->getRepository(Event::class)->find($id);

        $form = $this->createForm(EventFormType::class,$Event);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('list11');
        }

        return $this->render('event/edit.html.twig', ['form' => $form->createView()]);
    }
    /**
     * @Route("/new11")
     * Method({"GET", "POST"})
     */
    public function new(Request $request) {
        $Event = new Event();

        $form = $this->createForm(EventFormType::class,$Event);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $Event = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Event);
            $entityManager->flush();

            return $this->redirectToRoute('list11');
        }
        return $this->render('event/new.html.twig',['form' => $form->createView()]);
    }
    /**
     * @Route("/show11/{id}", name="show11")
     */
    public function show($id) {
        $Event = $this->getDoctrine()->getRepository(Event::class)->find($id);

        return $this->render('event/show.html.twig', array('event' => $Event));
    }
    /**
     * @Route("/delete11/{id}",name="delete11")
     * @Method({"DELETE"})
     */
    public function delete(Request $request, $id) {
        $Event = $this->getDoctrine()->getRepository(Event::class)->find($id);
        $reservations = $this->getDoctrine()->getRepository(Reservation::class)->findbata($id);
        foreach ($reservations as $user_service) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user_service);
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($Event);
        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('list11');
    }

    /**
     * @Route("/list12/{id}",name="list12")
     */
    public function list3($id,Request $request, PaginatorInterface $paginator)
    {
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles*
        $entityManager = $this->getDoctrine()->getManager();
        $currentRoute = $request->attributes->get('_route');
        //$c = strval($currentRoute) ;
        //$dateImmutable = \DateTime::createFromFormat('Y-m-d H:i:s', strtotime('now')); # also tried using \DateTimeImmutable

        $views = new Views();
        $views->setRoutename('event');
        $views->setVisitdate(new \DateTime()); # changes error from about a string to bool



        $entityManager->persist($views);
        $entityManager->flush();
        $list = $this->getDoctrine()->getRepository(Event::class)->findAll();
        $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $Event = $paginator->paginate(
            $list, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );
        return $this->render('event/listfront.html.twig', ['Event' => $Event
            ,'client'=>$client]);
    }
    /**
     * @Route("/pdfff/", name="pdfff")
     */
    public function pdf()
    {
        $Event = $this->getDoctrine()->getRepository(Event::class)->findAll();
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('event/mypdf.html.twig',['Event' => $Event]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }
    /**
     * @Route("/recherche", name="recherche")
     */
    public function searchAction(Request $request)
    {

        $data = $request->request->get('search');


        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT e FROM App\Entity\Event e WHERE e.NomEvent    LIKE :data')
            ->setParameter('data', '%'.$data.'%');


        $list = $query->getResult();

        return $this->render('event/list.html.twig', [
            'list' => $list,
        ]);

    }
    /**
     * @Route("/event/tri", name="sort")
     */
    public function TriAction(Request $request)
    {




        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT e FROM App\Entity\Event e
    ORDER BY e.NomEvent ASC');



        $list = $query->getResult();

        return $this->render('event/list.html.twig', array(
            'list' => $list));

    }
}
