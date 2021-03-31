<?php

namespace App\Controller;
use App\Entity\Client;
use App\Entity\Experience;
use App\Entity\Commentaire;
use App\Entity\Views;
use App\Form\ExperienceType;
use Knp\Component\Pager\Paginator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\File\File;
use Knp\Component\Pager\PaginatorInterface;


class ExperienceController extends Controller
{
    /**
     * @Route("/Experience", name="Experience")
     */
    public function index(): Response
    {     $experience = $this->getDoctrine()->getRepository(Experience::class)->findAll();
        return $this->render('Experience/list1.html.twig', [
            'experience' => $experience,
        ]);
    }

    /**
     * @Route("/list",name="list")
     */
    public function list1(Request $request)
    {  $i=0;
         $count=[];
        $experience = $this->getDoctrine()->getRepository(Experience::class)->findAll();
       $endroit=['zaghouan','sousse','beja'];
       foreach($endroit as $end)
       {$value=0;
           $i=0;
         foreach($experience as $exp)
         {
             if($exp->getEndroit()==$end){
                 $i=$i+1;
                $value=$exp->getNote()+$value;

             }

         }
         if($i>0) {
             $count[] = $value / $i;
         }
        else {

            $count[]=0;
        }

         }


     return   $this->render('experience/list2.html.twig', ['experience' => $experience,'endroit'=>json_encode($endroit),'count'=>json_encode($count)]);




    }
    /**
     * @Route("/listimprimer",name="listimprimer")
     */
    public function list2()
    {
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles


        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $experience = $this->getDoctrine()->getRepository(Experience::class)->findAll();
        // Retrieve the HTML generated in our twig file
        $html = $this->render('experience/list1.html.twig', ['experience' => $experience]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);


    }
    /**
     * @Route("/list2/{id}",name="list2")
     */
    public function list($id,Request $request)
    {  $entityManager = $this->getDoctrine()->getManager();
        $currentRoute = $request->attributes->get('_route');
        //$c = strval($currentRoute) ;
        //$dateImmutable = \DateTime::createFromFormat('Y-m-d H:i:s', strtotime('now')); # also tried using \DateTimeImmutable

        $views = new Views();
        $views->setRoutename('forum');
        $views->setVisitdate(new \DateTime()); # changes error from about a string to bool



        $entityManager->persist($views);
        $entityManager->flush();

        $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $clients = $this->getDoctrine()->getRepository(Client::class)->findAll();
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles

        $experiences = $this->getDoctrine()->getRepository(Experience::class)->FindAll();

        if($request->isMethod("POST"))
        {
         $value=$request->get('Recherche');
            $experiences = $this->getDoctrine()->getRepository(Experience::class)->Recherche($value);
            $experience = $this->get('knp_paginator')->paginate(
            // Doctrine Query, not results
                $experiences,
                // Define the page parameter
                $request->query->getInt('page', 1),
                // Items per page
                2
            );

            return $this->render('experience/list.html.twig', ['experience' => $experience,'client'=>$client,'clients'=>$clients]);
        }
        $experience = $this->get('knp_paginator')->paginate(
        // Doctrine Query, not results
            $experiences,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2);
        return $this->render('experience/list.html.twig', ['experience' => $experience,'client'=>$client,'clients'=>$clients]);

    }



    /**
     * @Route("/listtriepardate/{id}",name="list56")
     */
    public function listtrie($id,Request $request)
    {   $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $clients = $this->getDoctrine()->getRepository(Client::class)->findAll();
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles

        $experiences = $this->getDoctrine()->getRepository(Experience::class)->listOrderByDate();
        $experience = $this->get('knp_paginator')->paginate(
        // Doctrine Query, not results
            $experiences,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );
        return $this->render('experience/list.html.twig', ['experience' => $experience,'client'=>$client,'clients'=>$clients]);

    }
    /**
     * @Route("/listtrieparnote/{id}",name="list656")
     */
    public function listtrie1($id,Request $request)
    {   $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $clients = $this->getDoctrine()->getRepository(Client::class)->findAll();
        //récupérer tous les articles de la table article de la BD
        // et les mettre dans le tableau $articles

        $experiences = $this->getDoctrine()->getRepository(Experience::class)->listOrderByNote();
        $experience = $this->get('knp_paginator')->paginate(
        // Doctrine Query, not results
            $experiences,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );
        return $this->render('experience/list.html.twig', ['experience' => $experience,'client'=>$client,'clients'=>$clients]);

    }
    /**
     * @Route("/edit2/{id}/{id1}", name="edit2")
     * Method({"GET", "POST"})
     */
    public function edit(Request $request, $id,$id1) {

        $experience = $this->getDoctrine()->getRepository(Experience::class)->find($id1);
        $experience->setImage(
            new File($this->getParameter('image_directory').'/'.$experience->getimage())
        );
        $form = $this->createForm(ExperienceType::class,$experience);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $experience = $form->getData();
            $file= $experience->getImage();

            $filename= md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('image_directory'), $filename);


            $entityManager = $this->getDoctrine()->getManager();
            $experience->setImage($filename);
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
            $file= $experience->getImage();
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('image_directory'),
                    $filename
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }

            $entityManager = $this->getDoctrine()->getManager();
            $experience->setImage($filename);
            $entityManager->persist($experience);
            $entityManager->flush();

            return $this->redirectToRoute('list2',array('id' => $experience->GetIdClient()));
        }
        return $this->render('experience/new.html.twig',['form' => $form->createView()]);
    }

}
