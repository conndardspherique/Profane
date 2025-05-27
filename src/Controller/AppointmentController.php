<?php

namespace App\Controller;

use App\Form\AppointmentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppointmentController extends AbstractController
{
    #[Route('/rendezvous', name: 'appointment_form')]
    public function form(Request $request): Response
    {
        $form = $this->createForm(AppointmentType::class);

        return $this->render('rendezvous.html.twig', [
            'form' => $form->createView() // ✅ ici on passe un FormView
        ]);
    }
}
