<?php
namespace Cupon\TiendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cupon\OfertaBundle\Util\Util;

/**
 * @ORM\Entity
 */
class Tienda
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	protected $id;
	
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $nombre;
	
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $slug;
	
	/**
	 * @ORM\Column(type="string", length=10)
	 */
	protected $login;
	
	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $password;
	
	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $salt;
	
	/**
	 * @ORM\Column(type="text")
	 */
	protected $descripcion;
	
	/**
	 * @ORM\Column(type="text")
	 */
	protected $direccion;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Cupon\CiudadBundle\Entity\Ciudad")
	 */
	protected $ciudad;
	
	/** toString **/
	
	public function __toString()
	{
		return $this->getNombre();
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
		$this->slug = Util::getSlug($nombre);
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
	 * Set slug
	 *
	 * @param $slug string       	
	 */
	public function setSlug($slug) {
		$this->slug = $slug;
	}
	
	/**
	 * Get slug
	 *
	 * @return string
	 */
	public function getSlug() {
		return $this->slug;
	}
	
	/**
	 * Set login
	 *
	 * @param $login string       	
	 */
	public function setLogin($login) {
		$this->login = $login;
	}
	
	/**
	 * Get login
	 *
	 * @return string
	 */
	public function getLogin() {
		return $this->login;
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
	 * Set descripcion
	 *
	 * @param $descripcion text       	
	 */
	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}
	
	/**
	 * Get descripcion
	 *
	 * @return text
	 */
	public function getDescripcion() {
		return $this->descripcion;
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
	 * Set ciudad
	 *
	 * @param $ciudad Cupon\CiudadBundle\Entity\Ciudad       	
	 */
	public function setCiudad(\Cupon\CiudadBundle\Entity\Ciudad $ciudad) {
		$this->ciudad = $ciudad;
	}
	
	/**
	 * Get ciudad
	 *
	 * @return Cupon\CiudadBundle\Entity\Ciudad
	 */
	public function getCiudad() {
		return $this->ciudad;
	}
}