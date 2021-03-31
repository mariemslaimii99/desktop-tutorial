<?php

namespace App\Controller;
use App\Entity\Client;
use App\Entity\Commande;
use App\Entity\Panier;
use App\Entity\Produit;
use App\Form\CommandeType;
use App\Repository\ProduitRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;



class CommandeController extends AbstractController
{

    /**
     * @Route("add/{id}/{id1}/{id2}", name="panier_add")
     */
    public function add($id2, $id1,$id, Request $request)
    {

        $commande = new Commande();
        $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $produit = $this->getDoctrine()->getRepository(Produit::class)->find($id2);
        $panier = $this->getDoctrine()->getRepository(Panier::class)->find($id1);
        $commande->setProduit($produit);
        $commande->setPanier($panier);
        $form = $this->createForm(CommandeType::class, $commande);

        $form->handleRequest($request);
        $value=0;
        if ($form->isSubmitted() && $form->isValid()) {
            $commande = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commande);
            $entityManager->flush();
            $commande1 = $this->getDoctrine()->getRepository(Commande::class)->test($produit->getStock());
            foreach ($commande1 as $com) {
                if ($commande->getId() == $com->getId()){
                    $value =1;
                    $entityManager->remove($commande);
                    $entityManager->flush();
                    return $this->render('commande/new.html.twig', ['form' => $form->createView(),
                        'commande' => $commande,
                        'produit' =>$produit,
                        'value' =>$value
                    ]);
                }
            }
            return $this->redirectToRoute('list77', array('id' => $id,'id1'=>$id1));
        }
        return $this->render('commande/new.html.twig', ['form' => $form->createView(),
            'commande' => $commande,'client'=>$client,
            'produit' =>$produit,
             'value' =>$value



        ]);
    }

    /**
     * @Route("/list77/{id}/{id1}",name="list77")
     */
    public function list($id,$id1)
    {
        $produits=$this->getDoctrine()->getRepository(Produit::class)->listProduitOrderByPrix();
        $panier  =$this->getDoctrine()->getRepository(Panier::class)->find($id1);
        $commande=$this->getDoctrine()->getRepository(Commande::class)->findBy(array('panier' => $id));
        $client = $this->getDoctrine()->getRepository(Client::class)->find($id);


        return $this->render('commande/list.html.twig', ['commande' => $commande,
            'produits' => $produits,
            'panier' => $panier,
             'client'=>$client
        ]);
    }
    /**
     * @Route("/mod/{id}/{id1}/{id2}", name="panier_mod")
     */

    public function modifyProduct(Request $request, $id ,$id1 , $id2): Response
    {
        $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        $produit = $this->getDoctrine()->getRepository(Produit::class)->find($id2);
        $commande = $entityManager->getRepository(Commande::class)->find($id1);
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);
        $value=0;

        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager->flush();
            $commande1 = $this->getDoctrine()->getRepository(Commande::class)->test($produit->getStock());
            foreach ($commande1 as $com) {
                if ($commande->getId() == $com->getId()){
                    $value =1;
                    $entityManager->flush();
                    return $this->render('commande/edit.html.twig', [
                        'form' => $form->createView(),
                        'panier' => $id ,
                        'commande' => $commande,
                        'produit' => $produit,
                        'value' =>$value


                    ]);

                }
            }

            return $this->redirectToRoute('list77' , array('id' => $id,'id1'=>$id1));
        }

        return $this->render('commande/edit.html.twig', [
            'form' => $form->createView(),
            'panier' => $id ,
            'commande' => $commande,
            'produit' => $produit,
            'value' =>$value


        ]);
    }


    /**
     * @Route("/sup/{id}/{id1}/{id2}",name="panier_sup")
     * @Method({"DELETE"})
     */
    public function delete(Request $request, $id, $id1,$id2) {
        $commande = $this->getDoctrine()->getRepository(Commande::class)->find($id2);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($commande);
        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('list77', array('id' => $id,'id1'=>$id1));
    }
    /**
     * @Route("/listPDF/{id}",name="listPDF")
     */
    public function listPDF($id)
    {

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $produits = $this->getDoctrine()->getRepository(Produit::class)->findAll();
        $panier = $this->getDoctrine()->getRepository(Panier::class)->find($id);
        $commande = $this->getDoctrine()->getRepository(Commande::class)->findBy(array('panier' => $id));


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('commande/listPDF.html.twig', ['commande' => $commande,
            'produits' => $produits, 'panier' => $panier]);

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

    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository(Commande::class)->find($id);


        $editForm = $this->createForm(CommandesType::class, $commande);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $commande = $editForm->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($commande);
            $em->flush();

            return $this->redirectToRoute('list2' , array('id' => $id));
        }

        return $this->render('commande/ok.html.twig', array(
            'commande'    => $commande,
            'edit_form'   => $editForm->createView(),

        ));
    }


}
