<?php
// src/AppBundle/Form/UserType.php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * User Form
 */
class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('tel');
        $builder->add('permission');
        $builder->add('remarks', "textarea");
    }

    public function getName()
    {
        return "AppBundle_user";
    }
}

