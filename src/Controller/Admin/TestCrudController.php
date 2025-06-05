<?php
// src/Controller/Admin/TestCrudController.php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Vich\UploaderBundle\Field\VichImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use App\Entity\Photo;

class TestCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Photo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            VichImageField::new('imageFile')->onlyOnForms(),
        ];
    }
}
