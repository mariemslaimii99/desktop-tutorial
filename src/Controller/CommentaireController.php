<?php

namespace App\Controller;
use App\Entity\Rating;
use App\Form\CommentaireType;
use App\Entity\Client;
use App\Entity\Commentaire;
use App\Entity\Experience;
use App\Entity\Like;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentaireController extends AbstractController
{
    /**
     * @Route("/Commentaire", name="Commentaire")
     */
    public function index(): Response
    {
        return $this->render('Experience/index.html.twig', [
            'controller_name' => 'ExperienceController',
        ]);
    }
    /**
     * @Route("/list8/{id}/{id1}", name="Commentaire")
     */
    public function index1($id,$id1,Request $request): Response
    {    $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $experience = $this->getDoctrine()->getRepository(Experience::class)->find($id1);
        $clients = $this->getDoctrine()->getRepository(Client::class)->findAll();
        $commentaire = $this->getDoctrine()->getRepository(Commentaire::class)->findBy(array('idExperience' => $id1));
        if($request->isMethod("post")) {
            $value = $request->get('note');
            $value=(int)floor(($value+$experience->getNote())/2);
            $experience->setNote($value);
            $entityManager = $this->getDoctrine()->getManager();

            $Rate= new Rating();
            $Rate->setIdclient($id);
            $Rate->setIdexperience($id1);
            $entityManager->persist($Rate);
            $entityManager->flush();
            return $this->redirectToRoute('list3',array('id'=>$id,'id1'=>$id1));
        }

        $Like= new Like();
        $Like->setIdclient($id);
        $Like->setIdexperience($id1);
        $experience->setPoints($experience->getPoints()+1);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($Like);
        $entityManager->flush();
        $likes = $this->getDoctrine()->getRepository(Like::class)->findAll();
        return $this->redirectToRoute('list3',array('id'=>$id,'id1'=>$id1));
    }
    /**
     * @Route("/list3/{id}/{id1}",name="list3")
     */
    public function list($id,$id1,Request $request)
    {   $client = $this->getDoctrine()->getRepository(Client::class)->find($id);

    $experience = $this->getDoctrine()->getRepository(Experience::class)->find($id1);
        $clients = $this->getDoctrine()->getRepository(Client::class)->findAll();
        $rating = $this->getDoctrine()->getRepository(Rating::class)->findAll();
        if($request->isMethod("post")) {
            $value = $request->get('note');
     $value=(int)floor(($value+$experience->getNote())/2);
        $experience->setNote($value);
            $entityManager = $this->getDoctrine()->getManager();
            $Rate= new Rating();
            $Rate->setIdclient($id);
            $Rate->setIdexperience($id1);
            $entityManager->persist($Rate);
            $entityManager->flush();
            return $this->redirectToRoute('list3',array('id'=>$id,'id1'=>$id1));
        }

        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles
        $commentaire = $this->getDoctrine()->getRepository(Commentaire::class)->findBy(array('idExperience' => $id1));
        $likes = $this->getDoctrine()->getRepository(Like::class)->findAll();
        return $this->render('commentaire/list.html.twig', ['commentaire' => $commentaire,
            'client'=>$client,'clients'=>$clients,'experience'=>$experience,'likes'=>$likes,'rating'=>$rating]);
    }
    /**
     * @Route("/edit3/{id}/{id1}", name="edit3")
     * Method({"GET", "POST"})
     */
    public function edit(Request $request, $id,$id1) {

        $commentaire = $this->getDoctrine()->getRepository(Commentaire::class)->find($id1);

        $form = $this->createForm(CommentaireType::class,$commentaire);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('list3',array('id' => $commentaire->GetIdClient(),'id1' => $commentaire->GetIdExperience()));
        }

        return $this->render('commentaire/edit.html.twig', ['form' => $form->createView()]);
    }
    /**
     * @Route("/list4",name="list4")
     */
    public function list1()
    {
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles

        $commentaire = $this->getDoctrine()->getRepository(Commentaire::class)->findAll();
        return $this->render('commentaire/list1.html.twig', ['commentaire' => $commentaire]);
    }
    /**
     * @Route("/delete3/{id}",name="delete3")
     * @Method({"DELETE"})
     */
    public function delete(Request $request, $id) {
        $commentaire = $this->getDoctrine()->getRepository(Commentaire::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($commentaire);
        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('list4');
    }

    /**
     * @Route("/show2/{id}", name="show2")
     */
    public function show($id) {
        $classroom = $this->getDoctrine()->getRepository(Classroom::class)->find($id);

        return $this->render('classroom/show.html.twig', array('classroom' => $classroom));
    }
    /**
     * @Route("/new3/{id}/{id1}")
     * Method({"GET", "POST"})
     */
    public function new(Request $request,$id,$id1) {

        $commentaire = new Commentaire();
        $commentaire->setIdClient($id);
        $commentaire->setIdExperience($id1);

        $experience = $this->getDoctrine()->getRepository(Experience::class)->find($id1);
        $commentaire->setRelation($experience);
        $form = $this->createForm(CommentaireType::class,$commentaire);
       $value=0;
        $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $commentaire = $form->getData();
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($commentaire);
                $entityManager->flush();
                $commentaire1=$this->getDoctrine()->getRepository(Commentaire::class)->test();
                foreach($commentaire1 as $comment)
                {
                    if($comment->getId()==$commentaire->getId())
                    {
                        $entityManager->remove($commentaire);
                        $entityManager->flush();
                       $value=1;
                        return $this->render('commentaire/new.html.twig',['form' => $form->createView(),'value'=>$value]);
                    }
                }
                return $this->redirectToRoute('list3', array('id' => $commentaire->GetIdClient(), 'id1' => $commentaire->GetIdExperience()));
            }

        return $this->render('commentaire/new.html.twig',['form' => $form->createView(),'value'=>$value]);
    }

}
