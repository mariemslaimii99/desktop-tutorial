<?php

namespace App\Controller;
use App\Entity\Client;
use App\Entity\Experience;
use App\Entity\Commentaire;
use App\Form\ExperienceType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExperienceController extends AbstractController
{
    /**
     * @Route("/Experience", name="Experience")
     */
    public function index(): Response
    {
        return $this->render('Experience/index.html.twig', [
            'controller_name' => 'ExperienceController',
        ]);
    }
    /**
     * @Route("/list",name="list")
     */
    public function list1()
    {
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles

        $experience = $this->getDoctrine()->getRepository(Experience::class)->findAll();
        return $this->render('experience/list1.html.twig', ['experience' => $experience]);
    }
    /**
     * @Route("/list2/{id}",name="list2")
     */
    public function list($id)
    {   $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $clients = $this->getDoctrine()->getRepository(Client::class)->findAll();
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles

        $experience = $this->getDoctrine()->getRepository(Experience::class)->findAll();
        return $this->render('experience/list.html.twig', ['experience' => $experience,'client'=>$client,'clients'=>$clients]);
    }
    /**
     * @Route("/edit2/{id}/{id1}", name="edit2")
     * Method({"GET", "POST"})
     */
    public function edit(Request $request, $id,$id1) {
        $experience = new Experience();
        $experience = $this->getDoctrine()->getRepository(Experience::class)->find($id1);

        $form = $this->createForm(ExperienceType::class,$experience);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('list2',array('id' => $experience->GetIdClient()));
        }

        return $this->render('experience/edit.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/delete2/{id}",name="delete2")
     * @Method({"DELETE"})
     */
    public function delete(Request $request, $id) {
        $experience = $this->getDoctrine()->getRepository(Experience::class)->find($id);
        $commentaires = $this->getDoctrine()->getRepository(Commentaire::class)->findBy(array('idExperience'=>$id));
        $entityManager = $this->getDoctrine()->getManager();
        foreach ($commentaires as $user_service) {
            $entityManager->remove($user_service);
        }

        $entityManager->remove($experience);

        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('list');
    }

    /**
     * @Route("/show2/{id}", name="show2")
     */
    public function show($id) {
        $classroom = $this->getDoctrine()->getRepository(Classroom::class)->findBy($id);

        return $this->render('classroom/show.html.twig', array('classroom' => $classroom));
    }
    /**
     * @Route("/new2/{id}")
     * Method({"GET", "POST"})
     */
    public function new(Request $request,$id) {
        $experience = new Experience();
        $experience->setIdClient($id);
        $experience->setPoints(0);
        $form = $this->createForm(ExperienceType::class,$experience);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $experience = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($experience);
            $entityManager->flush();

            return $this->redirectToRoute('list2',array('id' => $experience->GetIdClient()));
        }
        return $this->render('experience/new.html.twig',['form' => $form->createView()]);
    }

}
