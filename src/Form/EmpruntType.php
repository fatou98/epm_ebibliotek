<?php

namespace App\Form;

use App\Entity\Emprunt;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpruntType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('startDate',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('endDate',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('statut',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('livre','Symfony\Bridge\Doctrine\Form\Type\EntityType', [
                'class' => 'App\Entity\Livre',
                'choice_label' => 'nom',
                'multiple' => false,'attr'=> ['class'=>'col-lg-12 custom-select','style'=>'margin-bottom:10px;']])
            ->add('adherant','Symfony\Bridge\Doctrine\Form\Type\EntityType', [
                'class' => 'App\Entity\Adherant',
                'choice_label' => 'firstname',
                'multiple' => false,'attr'=> ['class'=>'col-lg-12 custom-select','style'=>'margin-bottom:10px;']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Emprunt::class,
        ]);
    }
}
