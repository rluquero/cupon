<?php
namespace Cupon\CiudadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cupon\OfertaBundle\Util\Util;

/**
 * @ORM\Entity
 */
class Ciudad
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue
	*/
	protected $id;
	
	/** @ORM\Column(type="string", length=100) */
	protected $nombre;
	
	/** @ORM\Column(type="string", length=100) */
	protected $slug;
	
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
}