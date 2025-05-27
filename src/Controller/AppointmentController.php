<?php

namespace App\Controller;

use App\Form\AppointmentType;
use App\Service\MailjetService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppointmentController extends AbstractController
{
    #[Route('/rendezvous', name: 'appointment_form')]
    public function form(Request $request, MailjetService $mailjet): Response
    {
        $form = $this->createForm(AppointmentType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Données du formulaire
            $data = $form->getData();

            // Fichier joint, si ton form l’a
            $fichier = $form->get('fichier')->getData() ?? null;

            // Envoi du mail via ton service
            $mailjet->sendEmail($data, $fichier);

            $this->addFlash('success', 'Votre demande a bien été envoyée !');
            return $this->redirectToRoute('appointment_form'); // ou une autre page
        }

        return $this->render('rendezvous.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
