<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonaType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'apellido',
            'text',
            [
                'attr' => ['class' => ''],
                'label_attr' => ['class' => ''],
            ]
        )
            ->add('nombre')->add('Guardar', 'submit', ['attr' => ['class' => 'btn-primary']]);
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'AppBundle\Entity\Persona',));
    }


    public function getBlockPrefix()
    {
        return 'PersonaType';
    }

}
