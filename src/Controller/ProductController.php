<?php

namespace App\Controller;
use App\Entity\Panier;
use App\Entity\Client;
use App\Entity\Produit;
use App\Entity\Favoris;
use App\Entity\Categorie;
use App\Entity\Views;
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
{     /**
 * @Route("/produitfav/{id}", name="produitfav")
 */
    public function produits4(ProduitRepository $produitRepository,Request $request,$id, PaginatorInterface $paginator)
    {
        $products = $produitRepository->findAll();
        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        $favoris = $this->getDoctrine()->getRepository(Favoris::class)->findAll();

        $products = $paginator->paginate(
            $products, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6// Nombre de résultats par page
        );
        $client = $this->getDoctrine()->getRepository(Client::class)->find($id);

        $panier = $this->getDoctrine()->getRepository(Panier::class)->find(($client->getPaniers())->getId());
        return $this->render('product/fav.html.twig', [
            "products" => $products,"favoris"=>$favoris,
            "categorie" => $categorie,"client"=>$client,"panier"=>$panier

        ]);
    }
    /**
     * @Route("/produitsfav/{id}/{id1}", name="produitsfav")
     */
    public function produits1(ProduitRepository $produitRepository,Request $request,$id,$id1, PaginatorInterface $paginator)
    {
        $products = $produitRepository->findAll();
        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        $favoris = $this->getDoctrine()->getRepository(Favoris::class)->findAll();

        $products = $paginator->paginate(
            $products, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6// Nombre de résultats par page
        );
        $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $fav= new Favoris();
        $fav->setIdclient($id);
        $fav->setIdproduit($id1);
        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($fav);
        $entityManager->flush();
        $panier = $this->getDoctrine()->getRepository(Panier::class)->find(($client->getPaniers())->getId());
        return $this->render('product/produits.html.twig', [
            "products" => $products,"favoris"=>$favoris,
            "categorie" => $categorie,"client"=>$client,"panier"=>$panier

        ]);
    }

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
                 $this->getParameter('image_directory'),
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
        $product->setImage(
            new File($this->getParameter('image_directory').'/'.$product->getimage())
        );
        $form = $this->createForm(ProductFormType::class, $product);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $product=$form->getData();
            $file=$product->getImage();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();

            try{
                $file->move(
                    $this->getParameter('image_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                //... handle exception if something happens during file upload
            }

            $entityManager = $this->getDoctrine()->getManager();
            $product->setImage($fileName);

            $entityManager->flush();


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
     * @Route("/produits/{id}", name="produits")
     */
    public function produits(ProduitRepository $produitRepository,Request $request,$id, PaginatorInterface $paginator)
    {


        $entityManager = $this->getDoctrine()->getManager();
        $currentRoute = $request->attributes->get('_route');
        $c = strval($currentRoute) ;
        //$dateImmutable = \DateTime::createFromFormat('Y-m-d H:i:s', strtotime('now')); # also tried using \DateTimeImmutable

        $views = new Views();
        $views->setRoutename('product');
        $views->setVisitdate(new \DateTime()); # changes error from about a string to bool



        $entityManager->persist($views);
        $entityManager->flush();
        $products = $produitRepository->findAll();
        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->findAll();

        $products = $paginator->paginate(
            $products, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3// Nombre de résultats par page
        );
        $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $favoris = $this->getDoctrine()->getRepository(Favoris::class)->findAll();

        $panier = $this->getDoctrine()->getRepository(Panier::class)->find(($client->getPaniers())->getId());
        return $this->render('product/produits.html.twig', [
            "products" => $products,"favoris"=>$favoris,
            "categorie" => $categorie,"client"=>$client,"panier"=>$panier

        ]);
    }
    /**
     * @Route("/produittrie/{id}/{id1}", name="produittrie")
     */
    public function produits2(ProduitRepository $produitRepository,Request $request, PaginatorInterface $paginator,$id1,$id)
    {

        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->find($id1);
        $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $products = $produitRepository->findBycat($categorie);
        $products = $paginator->paginate(
            $products, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6// Nombre de résultats par page
        );
        $favoris = $this->getDoctrine()->getRepository(Favoris::class)->findAll();

        $panier = $this->getDoctrine()->getRepository(Panier::class)->find(($client->getPaniers())->getId());
        return $this->render('product/produits.html.twig', [
            "products" => $products,
            "categorie" => $categorie,"client"=>$client,"favoris"=>$favoris,"panier"=>$panier

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
