<?php

namespace App\Form;

use App\Entity\Camion;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class KilometrageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('kilometrage_total',NumberType::class,[
                'label'=> 'kilometrage total au compteur',
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Entrez le kilometrage total',
                ]
            ])
            ->add('kilometrage_jour',NumberType::class,[
                'label'=> 'kilometrage du jour',
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Entrez le kilometrage du jour',
                ]
            ])
            ->add('tour',NumberType::class,[
                'label'=> 'Entrer le nombre de tour',
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Nombre de tour effecteur',
                ]
            ])
            ->add('createtAt',DateType::class,[
                'label'=> 'date',
                'widget'=>'single_text',
                'attr' => [ "class" => "form-control form-control-user",
                    'placeholder'=> "date"
                ],
            ])
            -> add('camion',EntityType::class,[
                'class' => Camion::class,
                'choice_label' => 'immatriculation',
                'placeholder' => 'Sélectionner un fournisseur',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
