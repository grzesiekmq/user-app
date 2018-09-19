<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller {
	/**
	 * @Route("/users", name="users")
	 */
	public function listUsersAction() {
		$repository = $this->getDoctrine()
			->getRepository('AppBundle:User');

		$users = $repository->findAll();

		return $this->render('users.html.twig', ['users' => $users,

		]);
	}

}
