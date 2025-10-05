<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class GammeController extends AbstractController
{
    #[Route('/gamme/{fname}/{lname}', name: 'home')]
    public function index($fname, $lname): Response
    {
        return $this->render('gamme/index.html.twig', [
            'fn' => $fname,
            'ln' => $lname,
        ]);
    }

#[Route(path: '/detail/{id}', name: 'gamme_detail', requirements: ['id' => '\d+'])]
public function detail($id): Response
{
    $libelle = "videoprojecteur";

    return $this->render('gamme/detail.html.twig', [
        'id' => $id,
        'lib' => $libelle,
    ]);
}


}
