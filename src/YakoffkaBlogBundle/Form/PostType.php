<?php

namespace YakoffkaBlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->add('title')
            // ->add('description')
            // ->add('content')
            // ->add('createdDate', 'datetime')
            // ->add('editDate', 'datetime')
            // ->add('author')
            // ->add('source')
            // ->add('linkSource')
            // ошибка Could not load type "datetime"
            // https://stackoverflow.com/questions/34929878/symfony-crud-edict-could-not-load-type-datetime

            ->add('title')
            ->add('description')
            ->add('content')
            ->add('createdDate')
            ->add('editDate')
            ->add('author')
            ->add('source')
            ->add('linkSource')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'YakoffkaBlogBundle\Entity\Post'
        ));
    }
}
