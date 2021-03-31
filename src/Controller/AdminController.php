<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Commande;
use App\Entity\Produit;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/admin_list", name="admin_list")
     */
    public function Affiche(Request $request,PaginatorInterface $paginator)
    {
        $allclient=$this->getDoctrine()
            ->getRepository(Client::class)
            ->findAll();
        $commande=$this->getDoctrine()
            ->getRepository(Commande::class)
            ->listProduitOrderByQuantite();
        $produits = $this->getDoctrine()->getRepository(Produit::class)->findAll();
        if($request->isMethod("POST")) {
            $value = $request->get('Recherche');
            $allclient = $this->getDoctrine()->getRepository(Client::class)->Recherche($value);
            $client = $paginator->paginate(
                $allclient, // Requête contenant les données à paginer (ici nos articles)
                $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
                2 // Nombre de résultats par page

            );
            return $this->render('admin/list2.html.twig',[ array("list"=>$client) ,
                'client' => $client,
                'commande' => $commande,
                'produits' => $produits,


            ]);
        }
        $client = $paginator->paginate(
            $allclient, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            2 // Nombre de résultats par page
        );



        return $this->render('admin/list2.html.twig',[ array("list"=>$client) ,
            'client' => $client,
            'commande' => $commande,
            'produits' => $produits,


        ]);
    }
    /**
     * @Route("/sup/{id}",name="commande_sup")
     * @Method({"DELETE"})
     */
    public function delete(Request $request, $id) {
        $commande = $this->getDoctrine()->getRepository(Commande::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($commande);
        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('admin_list');
    }
}
