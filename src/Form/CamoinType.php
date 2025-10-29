<?php

namespace App\Form;

use App\Entity\Camion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CamoinType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('immatriculation')
            ->add('marque')
            ->add('modele')
            ->add('type')
            ->add('capacite')
            ->add('volume')
            ->add('carburant')
            ->add('kilometrage')
            ->add('etat')
            ->add('localisation')
            ->add('prix')
            ->add('createtAt')
            ->add('user')
            ->add('agence')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Camion::class,
        ]);
    }
}
