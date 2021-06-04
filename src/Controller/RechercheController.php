<?php

namespace App\Controller;

use App\Repository\LivreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RechercheController extends AbstractController
{
    /**
     * @Route("/recherche", name="recherche")
     */
    public function index(LivreRepository $livreRepository): Response
    {
        if(isset($_POST['submit'])){
            extract($_POST);
                $livres=$livreRepository->findBy(['nom'=>$name]);
                return $this->render('recherche/index.html.twig', [
                    'controller_name' => 'RechercheController',
                    'livres'=>$livres,
            "user"=>$this->getUser()


                ]);
        }else{
            return $this->render('recherche/index.html.twig', [
                'controller_name' => 'RechercheController',
                'livres'=>[],
            "user"=>$this->getUser()

            ]);
        }

        
    }
}
