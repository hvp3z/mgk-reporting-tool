<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Civilite;
use App\Entity\UserType as Role;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('codepostal')
            ->add('ville')
            ->add('email', EmailType::class)
            ->add('telfixe')
            ->add('telpro')
            ->add('username', TextType::class)
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            /*->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))*/
            ->add('civilite', EntityType::class, array(
                'class' => Civilite::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.designation', 'ASC');
                },
                'choice_label' => 'designation',
            ))
            ->add('roles', ChoiceType::class, array(
                'choices'   => array(
                    'Admin'          => 'ROLE_ADMIN',
                    'Client Final'    => 'ROLE_CLIENTFINAL',
                    'Pilote'         => 'ROLE_PILOTE',
                ),
                'required'  => true,
                'multiple'  => true,
            ))
            //->add('reportings')
            /*->add('type', EntityType::class, array(
                'class' => Role::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('t')
                        ->orderBy('t.designation', 'ASC');
                },
                'choice_label' => 'designation',
            ))*/;
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
