<?php

namespace App\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use App\AdminBundle\Entity\FormulaireOperation;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FormulaireOperationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        

        $builder->add('contacts_gender', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'choice_attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('contacts_firstname', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('contacts_lastname', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('contacts_birthdate', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('contacts_mail_pro', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('contacts_mobile_phone', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('contacts_phone', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])
        ->add('contacts_linkedin', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])
        ->add('contacts_twitter', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])
        ->add('contacts_facebook', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('contacts_profession', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('contacts_workname', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('company_name', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('company_naf', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('company_legal_status', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('company_siret', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('company_number_employees', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('company_address', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('company_turnovers', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('company_postal_code', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('company_country', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('company_standard_phone', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('company_fax', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('company_website', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ])->add('company_mail', ChoiceType::class, [
            'choices' => [
                "Affiché" => 1,
                "Editable" => 2,
                "Requis" => 3
            ],
            'expanded' => true,
            'multiple' => true,
            'attr' => ['class' => 'custom-control custom-checkbox']
        ]);

        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FormulaireOperation::class,
        ]);
    }
}
