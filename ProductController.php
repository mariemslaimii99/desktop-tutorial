<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Categorie;
use App\Form\ProductFormType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\File;


class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /**
     * @Route("/add_product", name="add_product")
     */
    public function addProduct(Request $request): Response
    {


        $product = new Produit();
        $form = $this->createForm(ProductFormType::class, $product);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {   $product=$form->getData();
            $file=$product->getImage();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();

           try{
               $file->move(
                 $this->getParameter('images_directory'),
                   $fileName
              );
           } catch (FileException $e) {
               //... handle exception if something happens during file upload
           }

            $entityManager = $this->getDoctrine()->getManager();
            $product->setImage($fileName);
            $entityManager->persist($product);
            $entityManager->flush();
        }

        return $this->render("product/product-form.html.twig", [
            "form_title" => "Ajouter un produit",
            "form_product" => $form->createView(),
        ]);
    }



    /**
     * @Route("/product/{id}", name="product")
     */
    public function product(int $id): Response
    {
        $product = $this->getDoctrine()->getRepository(Produit::class)->find($id);

        return $this->render("product/product.html.twig", [
            "product" => $product,
        ]);
    }
    /**
     * @Route("/modify_product/{id}", name="modify_product")
     */
    public function modifyProduct(Request $request, int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $product = $entityManager->getRepository(Produit::class)->find($id);
        $form = $this->createForm(ProductFormType::class, $product);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            /** @var @var $uploadedFile */
       $uploadedFile =$form['image']->getData();
            $destination = $this->getParameter('kernel.project_dir').'/public/uploads/$uploadedFile';

            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);


            $newFilename = Urlizer::urlize($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
            $uploadedFile->move(
                $destination,
                $newFilename
            );
            $product->setImageFilename($newFilename);


        }

        return $this->render("product/product-form.html.twig", [
            "form_title" => "Modifier un produit",
            "form_product" => $form->createView(),
        ]);

    }


    /**
     * @Route("/delete-product/{id}", name="delete_product")
     */
    public function deleteProduct(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Produit::class)->find($id);
        $entityManager->remove($product);
        $entityManager->flush();

        return $this->redirectToRoute("products");
    }
    /**
     * @Route("/show/{id}", name="show")
     */
    public function afficherP($id)
    {
        $product = $this->getDoctrine()->getRepository(Produit::class)->find($id);
        return $this->render('product/detailsP.html.twig', array('product' => $product));
    }

    /**
     * @Route("/produits", name="produits")
     */
    public function produits(ProduitRepository $produitRepository,Request $request, PaginatorInterface $paginator)
    {
        $products = $produitRepository->findAll();
        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->findAll();

        $products = $paginator->paginate(
            $products, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6// Nombre de résultats par page
        );
        return $this->render('product/produits.html.twig', [
            "products" => $products,
            "categorie" => $categorie,

        ]);
    }
    /**
     * @Route("/produittrie/{id}", name="produittrie")
     */
    public function produits1(ProduitRepository $produitRepository,Request $request, PaginatorInterface $paginator,$id)
    {

        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->find($id);
        $products = $produitRepository->findBycat($categorie);
        $products = $paginator->paginate(
            $products, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6// Nombre de résultats par page
        );
        return $this->render('product/produits.html.twig', [
            "products" => $products,
            "categorie" => $categorie,

        ]);
    }
    /**
     * @Route("/pdf", name="pdf")
     */
    public function pdfs()
    {
        $products =$this->getDoctrine()->getRepository(Produit::class)->findAll();
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('product/mypdf.html.twig', ['products' => $products]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }
    /**
     * @Route("/products", name="products")
     */

    public function list1(Request $request)
    {  $i=0;
       $nom=[];
        $count=[];
        $products = $this->getDoctrine()->getRepository(Produit::class)->findAll();
        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->findAll();

        foreach($categorie as $cat)
        {$nom[]=$cat->getNom();
            $i=0;
            foreach($products as $prod)
            {
                if($prod->getCategorie()==$cat){
                    $i=$i+1;
                }
            }
           $count[]=$i;

        }

        return $this->render('product/products.html.twig', [
            "products" => $products,
            "categorie" => $categorie,'nom'=>json_encode($nom),'count'=>json_encode($count)

        ]);




    }
}
