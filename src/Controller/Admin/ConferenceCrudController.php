<?php

namespace App\Controller\Admin;

use App\Entity\Conference;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ConferenceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Conference::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            'id',
            'city',
            'year',
            'isInternational',
            'slug'
        ];
    }
}
