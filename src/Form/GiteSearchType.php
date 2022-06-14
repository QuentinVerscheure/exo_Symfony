<?php

namespace App\Form;

use App\Entity\GiteSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GiteSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('searchLocalisation', IntegerType::class,[
                "required" => false,
                "label" => "localisation du bien"
                // "attr" => ["placeholder" => "localisation du bien"]
            ])
            ->add('minsurface', IntegerType::class,[
                "required" => false,
                "label" => "surface minimale"
            ])
            ->add('minnumberOfBedroom', IntegerType::class,[
                "required" => false,
                "label" => "chambres minimum"
            ])
            ->add('minnumberOfBed', IntegerType::class,[
                "required" => false,
                "label" => "lits minimum"
            ])
            ->add('isOkPets', CheckboxType::class,[
                "required" => false,
                "label" => "animaux accéptés"
            ])
            ->add('submit', SubmitType::class,[
                "label" => "rechercher",
                'attr' => ["class" => 'btn-secondary']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GiteSearch::class,
        ]);
    }
}


