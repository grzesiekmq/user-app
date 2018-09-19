<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="`user`")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser {
	/**
	 * @var int
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="name", type="string", length=50)
	 */
	protected $name;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="surname", type="string", length=50)
	 */
	private $surname;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="birth_date", type="date", length=10)
	 */
	private $birthDate;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="position", type="string", length=100)
	 */
	private $position;

	/**
	 * Get id
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 *
	 * @return User
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Set surname
	 *
	 * @param string $surname
	 *
	 * @return User
	 */
	public function setSurname($surname) {
		$this->surname = $surname;

		return $this;
	}

	/**
	 * Get surname
	 *
	 * @return string
	 */
	public function getSurname() {
		return $this->surname;
	}

	/**
	 * Set birthDate
	 *
	 * @param string $birthDate
	 *
	 * @return User
	 */
	public function setBirthDate($birthDate) {
		$this->birthDate = $birthDate;

		return $this;
	}

	/**
	 * Get birthDate
	 *
	 * @return string
	 */
	public function getBirthDate() {
		return $this->birthDate;
	}

	/**
	 * Set position
	 *
	 * @param string $position
	 *
	 * @return User
	 */
	public function setPosition($position) {
		$this->position = $position;

		return $this;
	}

	/**
	 * Get position
	 *
	 * @return string
	 */
	public function getPosition() {
		return $this->position;
	}

}
