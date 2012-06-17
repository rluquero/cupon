<?php
namespace Cupon\CiudadBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\CiudadBundle\Entity\Ciudad;

class Ciudades implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
    // Los 25 municipios más poblados de España según el INE
    // fuente: http://es.wikipedia.org/wiki/Municipios_de_Espa%C3%B1a_por_poblaci%C3%B3n
        
    $ciudades = array(
      'Madrid',
      'Barcelona',
      'Valencia',
      'Sevilla',
      'Zaragoza',
      'Málaga',
      'Murcia',
      'Palma de Mallorca',
      'Las Palmas de Gran Canaria',
      'Bilbao',
      'Alicante',
      'Córdoba',
      'Valladolid',
      'Vigo',
      'Gijón',
      'Hospitalet de Llobregat',
      'La Coruña',
      'Granada',
      'Vitoria-Gasteiz',
      'Elche',
      'Oviedo',
      'Santa Cruz de Tenerife',
      'Badalona',
      'Cartagena',
      'Tarrasa',
     );
        
		foreach ($ciudades as $ciudad) {
			$entidad = new Ciudad();
			$entidad->setNombre($ciudad['nombre']);
			$manager->persist($entidad);
		}
		$manager->flush();
	}
}