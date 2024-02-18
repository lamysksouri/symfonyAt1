<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    //#[Route('/show')]
    public function show()
    {
        //echo "Hello everyone!";
        //die;
        //dump('Hello everyone');
        //die;
        //dd is also dump die
        dd('Hello everyone');
    }

    //{age<\d+>} is also requirements: ['age' => '\d+']
    //{age<\d+>?22} yaane kif hata me thotlou chay baed l afficher yhotlek l valeur li aatithelou li heya 22
    
    #[Route('/afficher/{prenom}/{age<\d+>?22}',name:'home_afficher' )]
    public function afficher($prenom, $age)
    {
        dd("Votre prenom est $prenom et votre age est $age!");
        //then u go to the url and type afficher/lamys or any other whatever
    }

    #[Route('/test')]
    public function test()
    {
        //new Response : HttpFoundation
        return new Response("<h1>Tout va bien ! </h1>");
    }

    #[Route('/test2/{nom}',name:'test2')]
    public function test2($nom)
    {
        return $this->render("Home/test2.html.twig",['pre' => $nom]);
    }
}