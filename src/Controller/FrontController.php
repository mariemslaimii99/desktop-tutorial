<?php

namespace App\Controller;

use App\Entity\Logs;
use App\Entity\User;
use App\Entity\Views;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;



class FrontController extends AbstractController
{

    /**
     * @Route("/inscription", name="inscription")
     */
    public function clientajout(Request $request , UserPasswordEncoderInterface $encoder ) {
        $user = new User();

        $form = $this->createForm(UserType::class,$user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user,$user->getPassword());
            $user->setPassword($hash);

            $user = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('security_login');
        }
        return $this->render('frontend/inscription.html.twig',['form' => $form->createView()]);
    }

    /**
     * @Route("/event", name="event")
     */
    public function index1(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $currentRoute = $request->attributes->get('_route');
        $c = strval($currentRoute) ;
        //$dateImmutable = \DateTime::createFromFormat('Y-m-d H:i:s', strtotime('now')); # also tried using \DateTimeImmutable

        $views = new Views();
        $views->setRoutename($c);
        $views->setVisitdate(new \DateTime()); # changes error from about a string to bool



        $entityManager->persist($views);
        $entityManager->flush();
        return $this->render('frontend/event.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/produit", name="produit")
     */
    public function index2(Request  $request): Response
    {   $entityManager = $this->getDoctrine()->getManager();
        $currentRoute = $request->attributes->get('_route');
        $c = strval($currentRoute) ;
        //$dateImmutable = \DateTime::createFromFormat('Y-m-d H:i:s', strtotime('now')); # also tried using \DateTimeImmutable

        $views = new Views();
        $views->setRoutename($c);
        $views->setVisitdate(new \DateTime()); # changes error from about a string to bool



        $entityManager->persist($views);
        $entityManager->flush();
        return $this->render('frontend/produit.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }


    /**
     * @Route("/forum", name="forum")
     */
    public function index3(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $currentRoute = $request->attributes->get('_route');
        $c = strval($currentRoute) ;
        //$dateImmutable = \DateTime::createFromFormat('Y-m-d H:i:s', strtotime('now')); # also tried using \DateTimeImmutable

        $views = new Views();
        $views->setRoutename($c);
        $views->setVisitdate(new \DateTime()); # changes error from about a string to bool



        $entityManager->persist($views);
        $entityManager->flush();
        return $this->render('frontend/forum.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }


    /**
     * @Route("/connexion",name="security_login")
     */
    public function login(AuthenticationUtils $authenticationUtils , Request $request)
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $entityManager = $this->getDoctrine()->getManager();

        //$dateImmutable = \DateTime::createFromFormat('Y-m-d H:i:s', strtotime('now')); # also tried using \DateTimeImmutable

        $logs = new Logs();
        $logs->setLogname('log');
        $logs->setLogdate(new \DateTime()); # changes error from about a string to bool

        $entityManager->persist($logs);
        $entityManager->flush();

        return $this->render('frontend/login.html.twig',
            ['lastUsername'=>$lastUsername,'error' => $error]);
    }

    /**
     * @Route("/",name="welcome")
     */
    public function welcome()
    {
        return $this->render('frontend/welcome.html.twig',
            []);
    }






    /**
     * @Route("/testhelmi",name="testhelmi")
     */
    public function welcome1()
    {
        return $this->render('frontend/test4.html.twig',
            []);
    }

    /**
     * @Route("/deconnexion",name="security_logout")
     */
    public function logout()
    {

    }

}
