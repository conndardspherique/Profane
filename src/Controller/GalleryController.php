<?php

namespace App\Controller;

use App\Repository\PhotoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Finder\Finder;

class GalleryController extends AbstractController
{
    #[Route('/admin/gallery', name: 'admin_gallery')]
    public function index(PhotoRepository $photoRepository): Response
    {
        $photos = $photoRepository->findAll();

        return $this->render('gallery.html.twig', [
            'photos' => $photos,
        ]);
    }

    
}
