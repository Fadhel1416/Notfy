<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotfyController extends AbstractController
{
    /**
     * @Route("/{notfy}", name="app_notfy")
     */
    public function index($notfy=null): Response
    {

         if($notfy != null){
            $this->addFlash(
                $notfy,
                'this is a '.$notfy . ' flash mesage'
             );

         }
       
        return $this->render('notfy/index.html.twig', [
            'notfy' => $notfy,
        ]);
    }
}
