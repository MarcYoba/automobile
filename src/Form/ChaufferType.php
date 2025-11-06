<?php

namespace App\Form;

use App\Entity\Chauffer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChaufferType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Nom du chaiffeur',
                ]
            ])
            ->add('telephone',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Numero de telephone',
                ]
            ])
            ->add('permis',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Permis de conduire',
                ]
            ])
            ->add('ville',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Ville de residence',
                ]
            ])
            ->add('identification',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Numero de carte d\'identite',
                ]
            ])
            ->add('createtAt',DateType::class,[
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control form-control-lg',
                ]
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
            'data_class' => Chauffer::class,
        ]);
    }
}
