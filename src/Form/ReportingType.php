<?php

namespace App\Form;

use App\Entity\Reporting;
use App\Entity\User;
use App\Entity\ReportingType as Rtype;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class ReportingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('datecreation')
            ->add('type', EntityType::class, array(
                'class' => Rtype::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('rt')
                        ->orderBy('rt.designation', 'ASC');
                },
                'choice_label' => 'designation',
            ))
            ->add('users', EntityType::class, array(
                'class' => User::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.prenom', 'ASC');
                },
                'choice_label' => 'prenom',
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reporting::class,
        ]);
    }
}
