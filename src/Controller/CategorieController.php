<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categorie")
     */
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }
    /**
     * @Route("/add_categorie", name="add_categorie")
     */
    public function addCategorie(Request $request): Response
    {
        $categorie= new Categorie();
        $form = $this->createForm(CategorieFormType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categorie);
            $entityManager->flush();
        }
        return $this->render("categorie/categorie-form.html.twig", [
            "form_title" => "Ajouter une categorie",
            "form_categorie" => $form->createView(),
        ]);

    }
    /**
     * @Route("/categories", name="categories")
     */
    public function categories()
    {
        $categories = $this->getDoctrine()->getRepository(Categorie::class)->findAll();

        return $this->render('categorie/categories.html.twig', [
            "categories" => $categories,
        ]);
    }

    /**
     * @Route("/categorie/{id}", name="categorie")
     */
    public function categorie(int $id): Response
    {
        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->find($id);

        return $this->render("categorie/categorie.html.twig", [
            "categorie" => $categorie,
        ]);
    }

    /**
     * @Route("/modify-categorie/{id}", name="modify_categorie")
     */
    public function modifyCategorie(Request $request, int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $categorie = $entityManager->getRepository(Categorie::class)->find($id);
        $form = $this->createForm(CategorieFormType::class, $categorie);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager->flush();
        }

        return $this->render("categorie/categorie-form.html.twig", [
            "form_title" => "Modifier une categorie",
            "form_categorie" => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete-categorie/{id}", name="delete_categorie")
     */
    public function deleteCategorie(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $categorie = $entityManager->getRepository(Categorie::class)->find($id);
        $entityManager->remove($categorie);
        $entityManager->flush();

        return $this->redirectToRoute("categories");
    }

}