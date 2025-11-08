<?php

namespace App\Form;

use App\Entity\Camion;
use App\Entity\Clients;
use App\Entity\Locataire;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LocataireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('identification',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'code CNI pour le client',
                ]
            ])
            ->add('nom',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Nom/Raison Sociale',
                    ]
            ])
            ->add('contact',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Numéro de téléphone et adresse e-mail',
                    ]
            ])
            ->add('adresse',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Addresse',
                    ]
            ])
            ->add('permis',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Permis de conduire',
                    ]
            ])
            ->add('paiementmobile', NumberType::class,[
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Montant en mobile',
                    ]
            ])
            ->add('paiementbancaire', NumberType::class,[
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Montant en Bancaire',
                    ]
            ])
            ->add('paiementcash', NumberType::class,[
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Montant en Cash',
                    ]
            ])
            ->add('paiementcredit',NumberType::class,[
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Montant en credit',
                    ]
            ])
            ->add('dateDebut',DateType::class,[
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control form-control-user',
                    
                    ]
            ])
            ->add('heureDebut',TimeType::class,[
                'input' => 'string',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'min' => '00:00',
                    'max' => '23:00'
                ],
                'label' => 'Heure',
                'required' => false,
            ])
            ->add('DateFin',DateType::class,[
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control form-control-user']
            ])
            ->add('heureFin',TimeType::class,[
                'input' => 'string',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'min' => '00:00',
                    'max' => '23:00'
                ],
                'label' => 'Heure',
                'required' => false,
            ])
            ->add('lieuDepart',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Lieu de depart de la location',
                    ]
            ])
            ->add('lieurRetour',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Lieu de retour de la location',
                    ]
            ])
            ->add('dureeLocation',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'durée de la location',
                    ]
            ])
            ->add('statusReservation',ChoiceType::class,[
                'choices' => [
                    'En Cours' => 'En Cours',
                    'Confirmée' => 'Confirmee',
                    'Terminée' => 'Terminee',
                    'Annulée' => 'Annulee',
                ],
                
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Choisissez une catégorie',
                    ]
            ])
            ->add('montant',NumberType::class,[
                
                'attr' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Montant Total',
                    ]
            ])
            ->add('client',EntityType::class,[
                'class' => Clients::class,
                'choice_label' => 'nom',
                'placeholder' => 'Sélectionner un Client',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('camion',EntityType::class,[
                'class' => Camion::class,
                'choice_label' => 'immatriculation',
                'placeholder' => 'Sélectionner un véhicule',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Locataire::class,
        ]);
    }
}
