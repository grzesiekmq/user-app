<?php

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
			->add('name', TextType::class, array('label' => 'name'))
			->add('surname', TextType::class, array('label' => 'surname'))
			->add('birthDate', DateType::class, array('label' => 'birth date'))
			->add('position', TextType::class, array('label' => 'position'));
	}
	public function getParent() {
		return 'FOS\UserBundle\Form\Type\RegistrationFormType';
	}
}