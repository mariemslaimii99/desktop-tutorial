<?php

namespace App\Form;

use App\Entity\Endroit;
use App\Entity\Guide;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GuideType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('age')
            ->add('adresse')
            ->add('experience')
            ->add('endroit',EntityType::class,['class' => Endroit::class,
                'choice_label' => 'nom_endroit'  ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Guide::class,
        ]);
    }
}
