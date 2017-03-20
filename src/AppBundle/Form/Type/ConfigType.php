<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ConfigType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('applicationTheme', ChoiceType::class, array(
                'choices'  => array(
                    'Amelia' => 'amelia',
                    'Darkly' => 'darkly',
                    'Super Hero' => 'superhero',
                    'United' => 'united',
                ),
            ))
            ->add('applicationIntroMessage')
            ->add('applicationSellFiles', ChoiceType::class, array(
                'choices'  => array(
                    'Oui' => true,
                    'Non' => false,
                ),
            ))
            ->add('applicationSellFilesForceDownload', ChoiceType::class, array(
                'choices'  => array(
                    'Oui' => true,
                    'Non' => false,
                ),
            ))
            ->add('applicationSellFilesEmailSender')
            ->add('applicationSellFilesEmailSubject')
            ->add('applicationSellFilesEmailBody')
            ->add('galleryQuickLink', ChoiceType::class, array(
                'choices'  => array(
                    'Oui' => true,
                    'Non' => false,
                ),
            ))
            ->add('save', SubmitType::class)
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Config'
        ));
    }

}
