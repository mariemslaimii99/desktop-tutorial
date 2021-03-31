<?php

namespace App\Controller;
use App\Entity\Client;
use App\Entity\Logs;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class InscriptionController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index(): Response
    { $clients = $this->getDoctrine()->getRepository(Client::class)->findAll();
        return $this->render('welcome.html.twig', [
            'controller_name' => 'InscriptionController','clients'=>$clients
        ]);
    }

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
        return $this->render('inscription/inscription.html.twig',['form' => $form->createView()]);
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

        $dateImmutable = \DateTime::createFromFormat('Y-m-d H:i:s', strtotime('now')); # also tried using \DateTimeImmutable

        $logs = new Logs();
        $logs->setLogname('log');
        $logs->setLogdate(new \DateTime()); # changes error from about a string to bool

        $entityManager->persist($logs);
        $entityManager->flush();

        return $this->render('inscription/login.html.twig',
            ['lastUsername'=>$lastUsername,'error' => $error]);
    }



    /**
     * @Route("/deconnexion",name="security_logout")
     */
    public function logout()
    {

    }










}
