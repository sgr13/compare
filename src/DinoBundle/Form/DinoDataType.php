<?php

namespace DinoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DinoDataType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder
                ->add('orginalName', TextType::class, array('label' => 'Nazwa:'))
                ->add('name', TextType::class, array('label' => 'Polska nazwa:'))
                ->add('length', TextType::class, array('label' => 'Długość:'))
                ->add('weight', TextType::class, array('label' => 'Waga:'))
                ->add('foodtype', EntityType::class, array(
                'class' => 'DinoBundle:FoodType',
                'choice_label' => 'name', 'label' => 'Typ:'))
                ->add('period', EntityType::class, array(
                'class' => 'DinoBundle:Period',
                'choice_label' => 'name', 'label' => 'Epoka:'))
                ->add('subPeriod', EntityType::class, array(
                'class' => 'DinoBundle:SubPeriod',
                'choice_label' => 'name', 'label' => 'Okres:'))
                ->add('mainOrder', EntityType::class, array(
                'class' => 'DinoBundle:MainOrder',
                'choice_label' => 'name', 'label' => 'Rząd:'))
                ->add('subOrder', EntityType::class, array(
                'class' => 'DinoBundle:SubOrder',
                'choice_label' => 'name', 'label' => 'Podrząd:'))
                ->add('infraOrder', EntityType::class, array(
                'class' => 'DinoBundle:InfraOrder',
                'choice_label' => 'name', 'label' => 'Infrarząd :'))
                ->add('family', TextType::class, array('label' => 'Rodzina:'))
                ->add('meaning', TextType::class, array('label' => 'Znaczenie nazwy:'))
                ->add('meaningEng', TextType::class, array('label' => 'Znaczenie - angielski:'))
                ->add('discoverYear', TextType::class, array('label' => 'Rok odkrycia:'))
                ->add('discoverer', EntityType::class, array(
                'class' => 'DinoBundle:Discoverer',
                'choice_label' => 'name', 'label' => 'Odkrywca :'))
                ->add('firstPhoto', FileType::class, array('data_class' => null, 'label' => 'Pierwsze zdjęcie:'))
                ->add('secondPhoto', FileType::class, array('data_class' => null, 'label' => 'Drugie zdjęcie:'))
                ->add('save', SubmitType::class, array('label' => 'Dodaj'))      
        ;
    }
    
    public function getName()
    {
        return '';
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DinoBundle\Entity\DinoData'
        ));
    }

    
}
