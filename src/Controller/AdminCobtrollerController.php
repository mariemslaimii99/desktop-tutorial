<?php

namespace App\Controller;

use App\Entity\Guide;
use App\Entity\Logs;
use App\Entity\User;
use App\Entity\Views;
use App\Form\GuideType;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
/**
 * @Route("/admin", name="admin_")
 */
class AdminCobtrollerController extends AbstractController
{
    /**
     * @Route("/admin/cobtroller", name="admin_cobtroller")
     */
    public function index(): Response
    {
        return $this->render('admin_cobtroller/index.html.twig', [
            'controller_name' => 'AdminCobtrollerController',
        ]);
    }


    /**
     *@Route("/users" , name="users")
     */
    public function list()
    {
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        return  $this->render('backend/users.html.twig',['users' => $users , 'us'=>$users]);
    }

    /**
     * @Route("/ajoutguide" , name="ajoutguide")
     */
    public function guideajout(Request $request) {
        $guides = new Guide();

        $form = $this->createForm(GuideType::class,$guides);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $guides = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($guides);
            $entityManager->flush();

            return $this->redirectToRoute('welcome');
        }
        return $this->render('backend/ajoutguide.html.twig',['form' => $form->createView()]);
    }

    /**
     *@Route("/guides" , name="guides")
     */
    public function listguide()
    {
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles
        $guides = $this->getDoctrine()->getRepository(Guide::class)->findAll();
        return  $this->render('backend/guides.html.twig',['guides' => $guides ]);
    }

    /**
     * @Route("/editguides/{id}" , name="editguides")
     * Method({"GET", "POST"})
     */
    public function editguide(Request $request, $id) {
        $guides = new Guide();
        $guides = $this->getDoctrine()->getRepository(Guide::class)->find($id);

        $form = $this->createForm(GuideType::class,$guides);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('guides');
        }

        return $this->render('backend/edit_guides.html.twig', ['form' => $form->createView()]);
    }
    /**
     * @Route("/deleteguide/{id}" , name="deleteguide")
     * @Method({"DELETE"})
     */
    public function deleteguide(Request $request, $id) {
        $users = $this->getDoctrine()->getRepository(Guide::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($users);
        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('guides');
    }


    /**
     * @Route("/deleteuser/{id}" , name="deleteuser")
     * @Method({"DELETE"})
     */
    public function deleteuser(Request $request, $id) {
        $users = $this->getDoctrine()->getRepository(User::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($users);
        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('users');
    }

    /**
     * @Route("/test" , name="test")
     * Method({"GET", "POST"})
     */
    public function test(Request $request) {

        $currentRoute = $request->attributes->get('_route');

        return $this->render('backend/test.html.twig', ['croute'=>$currentRoute]);
    }

    /**
     *@Route("/views" , name="views")
     */
    public function listviews(Request $request , PaginatorInterface $paginator)
    {
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles
        $donnees = $this->getDoctrine()->getRepository(Views::class)->findAll();

        $views = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6 // Nombre de résultats par page
        );

        $count=[];

        $endroit=['product','event','forum'];
        foreach($endroit as $end)
        {
            $i=0;
            foreach($views as $exp)
            {
                if($exp->getRoutename()==$end){
                    $i=$i+1;
                }
            }
            $count[]=$i;
        }

        return   $this->render('backend/views.html.twig', ['views' => $views,'endroit'=>json_encode($endroit),'count'=>json_encode($count)]);
    }

    /**
     *@Route("/logs" , name="logs")
     */
    public function listlogs(Request $request , PaginatorInterface $paginator)
    {
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles
        $donnees = $this->getDoctrine()->getRepository(Logs::class)->findAll();

        $logs = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6 // Nombre de résultats par page
        );


        return   $this->render('backend/logs.html.twig', ['logs' => $logs]);
    }

    /**
     *@Route("/pdf1" , name="pdf1")
     */
    public function pdf1()
    {


        $views = $this->getDoctrine()->getRepository(Views::class)->findAll();
        $logs = $this->getDoctrine()->getRepository(Logs::class)->findAll();

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('backend/mypdf1.html.twig', [
            'title' => "Rapport des LOGS : " , 'views'=>$views , 'logs'=>$logs
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf1.pdf", [
            "Attachment" => false
        ]);
    }


    /**
     *@Route("/pdf2" , name="pdf2")
     */
    public function pdf2()
    {


        $views = $this->getDoctrine()->getRepository(Views::class)->findAll();
        $logs = $this->getDoctrine()->getRepository(Logs::class)->findAll();

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('backend/mypdf2.html.twig', [
            'title' => "Rapport des LOGS : " , 'views'=>$views , 'logs'=>$logs
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf2.pdf", [
            "Attachment" => false
        ]);
    }







}
