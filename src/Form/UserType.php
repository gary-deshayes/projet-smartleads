<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('code', TextType::class)
        ->add('gender', TextType::class)
        ->add('first_name', TextType::class)
        ->add('name', TextType::class)
        ->add('profil', TextType::class)
        ->add('statement', TextType::class)
        ->add('birth_date', DateTimeType::class)
        ->add('job_name', TextType::class)
        ->add('tel_mobile', TextType::class)
        ->add('tel_fixe', TextType::class)
        ->add('email', TextType::class)
        ->add('url_linkedin', TextType::class)
        ->add('contacts', TextType::class)
        ->add('companies', TextType::class)
        ->add('leader', TextType::class)
        ->add('subordinate', TextType::class)
        ->add('operations', TextType::class)
        ->add('parameters', TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Parameter::class,
        ]);
    }
}