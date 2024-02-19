<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CalculController extends AbstractController {
    public function somme($A,$B){
        return $A+$B;
        return $this->render("Home/test2.html.twig",['pre' => $nom]);

    }
}
