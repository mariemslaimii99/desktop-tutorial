<?php

namespace App\Form;

use App\Entity\Endroit;
use App\Entity\Event;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\DataTransformer;


class EventFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('NomEvent')
            ->add('nom_endroit',EntityType::class,['class'=>Endroit::class,
                'choice_label'=>'nom_endroit'])
            ->add('type',ChoiceType::class,[
                'choices'=> [
                    'Randonné' => 'Randonné',
                    'Camping' => 'Camping',
                ]
            ])
            ->add('nbPlaceMax')
            ->add('LieuDepart')
            ->add('DateDepart');


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
