<?php
namespace NerdHerd\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NerdHerd\HelloBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Request;

class FormTestController extends Controller
{
	public function newAction(Request $request)
	{
		// create a task and give it some dummy data for this example
		$product = new Product();
		//$product->setName('Product Name');
		//$product->setDescription("Descriçaõ");
		
		$form = $this->createFormBuilder($product)
		->add('name', 'text')
		->add('description', 'text')
		->getForm();

		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);
		
			//if ($form->isValid()) {
				// perform some action, such as saving the task to the database
				//var_dump($form);
				
				$dados= $form->get('name')->getData() . " - " . $form->get('description')->getData();

				return $this->render('NerdHerdHelloBundle:FormTest:produtoform.html.twig', array('dados' => $dados));
			//}
		}

// 		return $this->render('AcmeTaskBundle:Default:new.html.twig', array(
// 				'form' => $form->createView(),
// 		));
		
		return $this->render('NerdHerdHelloBundle:FormTest:produtoform.html.twig', array('form' => $form->createView()));
	}
}

?>