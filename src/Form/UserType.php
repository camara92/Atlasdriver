<?php

namespace App\Form;

use App\Entity\User;


use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
          //  ->add('email')
            // ->add('roles', CollectionType::class)
            //  ->add('password')
            
            ->add('lastname', TextType::class, [
                'label'=>'Votre nom',
                'constraints'=> new Length([
                    'min'=>2, 
                    'max'=>45
                ]),
                'attr'=>['placeholder'=>'Merci de saisir votre nom']
                ])
            ->add('firstname',TextType::class, [
                'label'=>'Votre prénom',
                'constraints'=> new Length([
                    'min'=>2, 
                    'max'=>45
                ]),
                'attr'=>['placeholder'=>'Merci de saisir votre nom']
                ])
            ->add('age')
            ->add('adresse')
            ->add('image')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
