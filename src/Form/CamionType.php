<?php

namespace App\Form;

use App\Entity\Camion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CamionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('immatriculation',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Immatriculation du camion',
                ]
            ])
            ->add('marque',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Marque du camion',
                ]
            ])
            ->add('modele',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Modele du camion',
                ]
            ])
            ->add('type',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Type de camion',
                ]
            ])
            ->add('capacite',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Capacite du camion',
                ]
            ])
            ->add('volume',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Volume du camion',
                ]
            ])
            ->add('carburant',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Caburant du camion en km/h',
                ]
            ])
            ->add('kilometrage',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Kilometrage du camion a l\'enregistrement',
                ]
            ])
            ->add('etat',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Etat du camion',
                ]
            ])
            ->add('localisation',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Localisation du camion',
                ]
            ])
            ->add('prix',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Prix du camion',
                ]
            ])
            ->add('createtAt',DateType::class,[
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control form-control-lg',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Camion::class,
        ]);
    }
}
