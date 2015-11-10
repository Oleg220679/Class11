<?php
// src/AppBundle/Controller/TextController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;



class TextController extends Controller
{
    /**
     * @Route("/test/text")
     */
    public function textShow()
    {
        $text = array("Школяр", "Молодець");
       
       $write = implode(', ', $text);
        
       
    return $this->render(
        'test/text.html.twig',
         array('word' => $write)
        );
     }
}

?>