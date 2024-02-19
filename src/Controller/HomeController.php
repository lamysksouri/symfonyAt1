<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    
    #[Route('/afficher/{prenom}/{age<\d+>?18}',name:'home_afficher' )]
    public function afficher($prenom, $age)
    {
        dd("Votre prenom est $prenom et votre age est $age!");
        //then u go to the url and type afficher/lamys or any other whatever
    }

    #[Route('/test2', name:'home_test2')]
    public function test(Request $request)
    {
        dd($request->get('_route'));
        //dd($request->get('_controller'));

        //new Response : HttpFoundation
        //return new Response("<h1>Tout va bien ! </h1>");

    }

    #[Route('/test2/{nom<[a-zA-Z]{2,15}>}',name:'home_test3', priority: 1)]
    public function test2($nom)
    {
        return $this->render("Home/test2.html.twig",['pre' => $nom]);
    }
}