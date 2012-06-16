<?php

namespace Cupon\OfertaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Venta {
	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $fecha;
	
	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Cupon\OfertaBundle\Entity\Oferta")
	 */
	protected $oferta;
	
	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Cupon\UsuarioBundle\Entity\Usuario")
	 */
	protected $usuario;
	
	/** Getters and setters **/
	
	/**
	 * Set fecha
	 *
	 * @param $fecha datetime
	 */
	public function setFecha($fecha) {
		$this->fecha = $fecha;
	}
	
	/**
	 * Get fecha
	 *
	 * @return datetime
	 */
	public function getFecha() {
		return $this->fecha;
	}
	
	/**
	 * Set oferta
	 *
	 * @param $oferta \Cupon\OfertaBundle\Entity\Oferta
	 */
	public function setOferta(\Cupon\OfertaBundle\Entity\Oferta $oferta) {
		$this->oferta = $oferta;
	}
	
	/**
	 * Get oferta
	 *
	 * @return \Cupon\OfertaBundle\Entity\Oferta
	 */
	public function getOferta() {
		return $this->oferta;
	}
	
	/**
	 * Set usuario
	 *
	 * @param $usuario \Cupon\UsuarioBundle\Entity\Usuario
	 */
	public function setUsuario(\Cupon\UsuarioBundle\Entity\Usuario $usuario) {
		$this->usuario = $usuario;
	}
	
	/**
	 * Get usuario
	 *
	 * @return \Cupon\UsuarioBundle\Entity\Usuario
	 */
	public function getUsuario() {
		return $this->usuario;
	}
}