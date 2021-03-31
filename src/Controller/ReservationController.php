<?php

namespace App\Controller;
use App\Entity\Client;
use App\Entity\Event;
use App\Entity\Reservation;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Request;


class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }
    /**
     * @Route("/list22/{id}",name="list22")
     */
    public function list($id)
    {     $reservation = $this->getDoctrine()->getRepository(Reservation::class)->findAll();
        $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $clients = $this->getDoctrine()->getRepository(Client::class)->findAll();
        $Events = $this->getDoctrine()->getRepository(Event::class)->findAll();
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles


        return $this->render('reservation/listres.html.twig', ['reservation'=>$reservation,'Event' => $Events,'client'=>$client,'clients'=>$clients]);
    }

    /**
     * @Route("/new22/{id}/{id1}")
     * Method({"GET", "POST"})
     */
    public function new(Request $request,$id,$id1) {
        $reservation = new Reservation();
        $reservation->setIdClient($id);
        $reservation->setIdEvent($id1);
        $event = $this->getDoctrine()->getRepository(Event::class)->find($id1);
        $event->setNbPlaceMax($event->getNbPlaceMax()-1);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($reservation);
        $entityManager->flush();

        return $this->redirectToRoute('list22',array('id' => $reservation->GetIdClient()));
    }
    /**
     * @Route("/delete22/{id}/{id1}",name="delete22")
     * @Method({"DELETE"})
     */
    public function delete(Request $request, $id,$id1) {
        $reservation = $this->getDoctrine()->getRepository(Reservation::class)->find($id1);
        $event = $this->getDoctrine()->getRepository(Event::class)->find($reservation->getIdevent());
        $event->setNbPlaceMax($event->getNbPlaceMax()+1);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($reservation);
        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('list22',array('id' => $id));
    }
    /**
     * @Route("/list23",name="list23")
     */
    public function listb()
    {   $reservation = $this->getDoctrine()->getRepository(Reservation::class)->findAll();
        $clients = $this->getDoctrine()->getRepository(Client::class)->findAll();
        $Events = $this->getDoctrine()->getRepository(Event::class)->findAll();
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles


        return $this->render('reservation/listback.html.twig', ['reservation'=>$reservation,'Event' => $Events,'clients'=>$clients]);
    }
    /**
     * @Route("/delete23/{id}",name="delete23")
     * @Method({"DELETE"})
     */
    public function deleteb(Request $request, $id) {
        $reservation = $this->getDoctrine()->getRepository(Reservation::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($reservation);
        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('list23');
    }
    /**
     * @Route("/pdff/", name="pdff")
     */
    public function pdff()
    {
        $reservation = $this->getDoctrine()->getRepository(Reservation::class)->findAll();
        $clients = $this->getDoctrine()->getRepository(Client::class)->findAll();
        $Events = $this->getDoctrine()->getRepository(Event::class)->findAll();
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('reservation/mypdff.html.twig',['reservation'=>$reservation,'Event' => $Events,'clients'=>$clients]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdff.pdf", [
            "Attachment" => true
        ]);
    }


}
