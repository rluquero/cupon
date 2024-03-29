<?php

namespace Cupon\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cupon\UsuarioBundle\Entity\Usuario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Usuario {
	/**
	 * @var integer $id
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @var string $nombre
	 * @ORM\Column(name="nombre", type="string", length=100)
	 */
	private $nombre;
	
	/**
	 * @var string $apellidos
	 * @ORM\Column(name="apellidos", type="string", length=255)
	 */
	private $apellidos;
	
	/**
	 * @var string $email
	 * @ORM\Column(name="email", type="string", length=255)
	 */
	private $email;
	
	/**
	 * @var string $password
	 * @ORM\Column(name="password", type="string", length=255)
	 */
	private $password;
	
	/**
	 * @var string $salt
	 * @ORM\Column(name="salt", type="string", length=255)
	 */
	private $salt;
	
	/**
	 * @var text $direccion
	 * @ORM\Column(name="direccion", type="text")
	 */
	private $direccion;
	
	/**
	 * @var boolean $permite_email
	 * @ORM\Column(name="permite_email", type="boolean")
	 */
	private $permite_email;
	
	/**
	 * @var datetime $fecha_alta
	 * @ORM\Column(name="fecha_alta", type="datetime")
	 */
	private $fecha_alta;
	
	/**
	 * @var datetime $fecha_nacimiento
	 * @ORM\Column(name="fecha_nacimiento", type="datetime")
	 */
	private $fecha_nacimiento;
	
	/**
	 * @var string $dni
	 * @ORM\Column(name="dni", type="string", length=9)
	 */
	private $dni;
	
	/**
	 * @var string $numero_tarjeta
	 * @ORM\Column(name="numero_tarjeta", type="string", length=20)
	 */
	private $numero_tarjeta;
	
	/**
	 * @var string $ciudad
   * @ORM\ManyToOne(targetEntity="Cupon\CiudadBundle\Entity\Ciudad")
	 */
	private $ciudad;
	
	/** construct **/
	
	public function __construct()
	{
		$this->fecha_alta = new \DateTime();
	}
	
	/** toString **/
	
	public function __toString()
	{
		return $this->getNombre().' '.$this->getApellidos();
	}
	
	/** Getters and setters **/
	
	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set nombre
	 *
	 * @param $nombre string       	
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}
	
	/**
	 * Get nombre
	 *
	 * @return string
	 */
	public function getNombre() {
		return $this->nombre;
	}
	
	/**
	 * Set apellidos
	 *
	 * @param $apellidos string       	
	 */
	public function setApellidos($apellidos) {
		$this->apellidos = $apellidos;
	}
	
	/**
	 * Get apellidos
	 *
	 * @return string
	 */
	public function getApellidos() {
		return $this->apellidos;
	}
	
	/**
	 * Set email
	 *
	 * @param $email string       	
	 */
	public function setEmail($email) {
		$this->email = $email;
	}
	
	/**
	 * Get email
	 *
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * Set password
	 *
	 * @param $password string       	
	 */
	public function setPassword($password) {
		$this->password = $password;
	}
	
	/**
	 * Get password
	 *
	 * @return string
	 */
	public function getPassword() {
		return $this->password;
	}
	
	/**
	 * Set salt
	 *
	 * @param $salt string       	
	 */
	public function setSalt($salt) {
		$this->salt = $salt;
	}
	
	/**
	 * Get salt
	 *
	 * @return string
	 */
	public function getSalt() {
		return $this->salt;
	}
	
	/**
	 * Set direccion
	 *
	 * @param $direccion text       	
	 */
	public function setDireccion($direccion) {
		$this->direccion = $direccion;
	}
	
	/**
	 * Get direccion
	 *
	 * @return text
	 */
	public function getDireccion() {
		return $this->direccion;
	}
	
	/**
	 * Set permite_email
	 *
	 * @param $permiteEmail boolean       	
	 */
	public function setPermiteEmail($permiteEmail) {
		$this->permite_email = $permiteEmail;
	}
	
	/**
	 * Get permite_email
	 *
	 * @return boolean
	 */
	public function getPermiteEmail() {
		return $this->permite_email;
	}
	
	/**
	 * Set fecha_alta
	 *
	 * @param $fechaAlta datetime       	
	 */
	public function setFechaAlta($fechaAlta) {
		$this->fecha_alta = $fechaAlta;
	}
	
	/**
	 * Get fecha_alta
	 *
	 * @return datetime
	 */
	public function getFechaAlta() {
		return $this->fecha_alta;
	}
	
	/**
	 * Set fecha_nacimiento
	 *
	 * @param $fechaNacimiento datetime       	
	 */
	public function setFechaNacimiento($fechaNacimiento) {
		$this->fecha_nacimiento = $fechaNacimiento;
	}
	
	/**
	 * Get fecha_nacimiento
	 *
	 * @return datetime
	 */
	public function getFechaNacimiento() {
		return $this->fecha_nacimiento;
	}
	
	/**
	 * Set dni
	 *
	 * @param $dni string       	
	 */
	public function setDni($dni) {
		$this->dni = $dni;
	}
	
	/**
	 * Get dni
	 *
	 * @return string
	 */
	public function getDni() {
		return $this->dni;
	}
	
	/**
	 * Set numero_tarjeta
	 *
	 * @param $numeroTarjeta string       	
	 */
	public function setNumeroTarjeta($numeroTarjeta) {
		$this->numero_tarjeta = $numeroTarjeta;
	}
	
	/**
	 * Get numero_tarjeta
	 *
	 * @return string
	 */
	public function getNumeroTarjeta() {
		return $this->numero_tarjeta;
	}
	
	/**
	 * Set ciudad
	 *
	 * @param $ciudad \Cupon\CiudadBundle\Entity\Ciudad       	
	 */
	public function setCiudad(\Cupon\CiudadBundle\Entity\Ciudad $ciudad) {
		$this->ciudad = $ciudad;
	}
	
	/**
	 * Get ciudad
	 *
	 * @return \Cupon\CiudadBundle\Entity\Ciudad
	 */
	public function getCiudad() {
		return $this->ciudad;
	}
}