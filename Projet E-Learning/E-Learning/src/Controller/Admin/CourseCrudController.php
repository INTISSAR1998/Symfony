<?php

namespace App\Controller\Admin;

use App\Entity\Course;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CourseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Course::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('category'),
            ImageField::new('image', 'Image')
                ->setBasePath('uploads/images/products')
                ->setUploadDir('public/uploads/images/products')
            ->setUploadedFileNamePattern('[randomhash]'),
            TextField::new('title'),
            TextareaField::new('description'),
            TextField::new('youtubeLink'),
            DateTimeField::new('publishedAt'),
            BooleanField::new('state')
        ];
    }

}
