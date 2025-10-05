<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        $msg = "Bienvenue sur notre site";
        //return new Response($msg);
        return $this->render("Produit/home.html.twig", array("msg" => $msg));
    }

   #[Route('/produit/detail/{id}', name: 'prd_detail')]
public function detail($id): Response
{
    $qte = 200;
    $prix_unitaire = 10;

    // Génération correcte de l'URL
    $url = $this->generateUrl('facture', [
        'id' => $id,
        'qte' => $qte,
        'pu' => $prix_unitaire,
    ]);

    // Par exemple, on peut rediriger directement :
    return $this->redirect($url);
}


   #[Route('/factur/{id}/{qte}/{pu}', name: 'prd_detail')]
public function facture($id, $qte, $pu): Response
{
    // Calcul du montant total
    $montant = $qte * $pu;

    return $this->render('produit/facture.html.twig', [
        'id' => $id,
        'qte' => $qte,
        'pu' => $pu,
        'mt' => $montant,
    ]);
}
}
