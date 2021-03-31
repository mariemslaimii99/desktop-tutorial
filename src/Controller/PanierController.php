<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Panier;
use App\Repository\CommandeRepository;
use App\Repository\PanierRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @Route("/panier")
 */
class PanierController extends AbstractController
{
    /**
     * Affiche la liste des produits
     * @Route("/", name="panier_index", methods={"GET"})
     */
    public function index(SessionInterface $session , CommandeRepository $commandeRepository): Response
    {
        $commande = $session->get('commande' , []);
        $panierAll = [];

        foreach ($commande as $id => $quantite) {
            $panierAll[] = [
                'commande' => $commandeRepository->find($id),
                'quantite' => $quantite
            ];
        }


        return $this->render('panier/index.html.twig', [
            'items' => $panierAll

        ]);
    }



}
