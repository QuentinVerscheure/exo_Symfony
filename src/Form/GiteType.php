<?php

namespace App\Form;

use App\Entity\Gite;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('contact')
            ->add('scheduleContact')
            ->add('localisation')
            ->add('surface')
            ->add('numberOfBedroom')
            ->add('numberOfBed')
            ->add('equipements', EntityType::class, [
                "class" => Equipement::class,
                "choise_label" => "name",
                "multiple" => true,
                "expanded" => true
            ])
            ->add('Pets')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gite::class,
        ]);
    }
}
