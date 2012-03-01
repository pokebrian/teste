<?php

namespace NerdHerd\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NerdHerd\HelloBundle\Entity\Product;
// use Doctrine\ORM\EntityRepository;
// use Doctrine\ORM\EntityManager;

class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
// 		$conn = $this->get('database_connection');
//      $testes = $conn->fetchAll('SELECT * FROM product');
// 		var_dump($testes);

		//salvar entidade
// 		$product = new Product();
// 		$product->setName("testProduct02");
// 		$product->setPrice(3.01);
// 		$product->setDescription("teste produto 2");
// 		$entityManager = $this->get('doctrine.orm.entity_manager');
// 		$entityManager->persist($product);
// 		$entityManager->flush();


		$entityManager = $this->get('doctrine.orm.entity_manager');
		$product = $entityManager->find('NerdHerd\HelloBundle\Entity\Product', 2);
		var_dump($product);

		
		return $this->render('NerdHerdHelloBundle:Default:index.html.twig', array('name' => $name));
    }
}
