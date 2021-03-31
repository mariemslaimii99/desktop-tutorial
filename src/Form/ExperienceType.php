<?php

namespace App\Form;

use App\Entity\Experience;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\DataTransformer;

class ExperienceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Titre')
            ->add('Description')
            ->add('Note')
            ->add('endroit', ChoiceType::class, array(
                'choices'   => array('sousse' => 'sousse', 'zaghouan' => 'zaghouan', 'beja' => 'beja')))
            ->add('image',FileType::class,['label'=>'image'], array('data_class'=>null, 'required'=>false))
            ->add('Date')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Experience::class,
        ]);
    }
}
