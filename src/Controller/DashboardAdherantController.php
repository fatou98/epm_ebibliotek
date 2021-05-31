<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardAdherantController extends AbstractController
{
    /**
     * @Route("/dashboard/adherant", name="dashboard_adherant")
     */
    public function index(): Response
    {
        return $this->render('dashboard_adherant/index.html.twig', [
            'controller_name' => 'DashboardAdherantController',
        ]);
    }
}
