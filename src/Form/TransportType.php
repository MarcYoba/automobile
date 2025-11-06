<?php

namespace App\Form;

use App\Entity\Chauffer;
use App\Entity\Transport;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('vente',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Numero identifiant Vente',
                ],
                'mapped' => false,
                'required' => true,
            ])
            ->add('achat',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Numero identifiant Achat',
                ],
                'mapped' => false,
                'required' => true,

            ])
            ->add('depart',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Depart du transport',
                ]
            ])
            ->add('destination',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Destination du transport',
                ]
            ])
            ->add('createtAt',DateType::class,[
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control form-control-lg',
                ]
            ])
            ->add('status',ChoiceType::class,[
                'choices' => [
                    'En Cours' => 'En Cours',
                    'Confirmée' => 'Confirmee',
                    'Terminée' => 'Terminee',
                    'Annulée' => 'Annulee',
                ],
                
                'attr' => [
                    'class' => 'form-control form-control-user',
                    ]
            ])
            ->add('chauffer',EntityType::class,[
                'class' => Chauffer::class,
                'choice_label' => 'nom',
                'placeholder' => 'Sélectionner un fournisseur',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('button',SubmitType::class,[
                'label' => 'Enregistrer',
                'attr' => [
                    'class' => 'btn btn-primary btn-user btn-block',
                    'style' => 'margin-top: 1rem;' // Adds spacing to move the button to a new line
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transport::class,
        ]);
    }
}
