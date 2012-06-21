<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function ayudaAction() {
	return $this->render('OfertaBundle:Default:ayuda.html.twig');
    }

    public function portadaAction() {
	$em = $this->getDoctrine()->getEntityManager();
	$oferta = $em->getRepository('OfertaBundle:Oferta')->findOneBy(array(
	    'ciudad' => 26
		));

	return $this->render(
			'OfertaBundle:Default:portada.html.twig', array('oferta' => $oferta)
	);
    }

}
