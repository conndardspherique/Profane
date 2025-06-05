<?php
// src/Controller/Admin/PhotoCrudController.php

namespace App\Controller\Admin;

use App\Entity\Photo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PhotoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Photo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // Champ formulaire pour uploader l'image, via VichUploader
            TextField::new('imageFile')
                ->setFormType(VichImageType::class)
                ->onlyOnForms(),

            // Affiche l'image sur la liste ou détail
            ImageField::new('filename')
                ->setBasePath('/uploads/images')
                ->onlyOnIndex(),

            DateTimeField::new('createdAt')->hideOnForm(),
        ];
    }
}
