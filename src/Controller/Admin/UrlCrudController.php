<?php

namespace App\Controller\Admin;

use App\Entity\Url;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
class UrlCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Url::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('url'),
            TextField::new('slug'),
            IdField::new('count'),
        ];
    }

}
