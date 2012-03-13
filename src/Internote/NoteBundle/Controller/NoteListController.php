<?php
namespace Internote\NoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;

class NoteListController extends Controller
{
	public function listAction()
	{
		//return new Response('<html><body>Esta é a página inicial, <strong>Bem Vindo!</strong></body></html>');

		
// 		$entityManager = $this->get('doctrine.orm.entity_manager');
// 		$product = $entityManager->find('NerdHerd\HelloBundle\Entity\Product', 2);
		
		
		$em = $this->getDoctrine()->getEntityManager();
		$query = $em->createQuery('SELECT u FROM Internote\NoteBundle\Entity\Note u');// WHERE u.age > 20');
		$notes = $query->getResult();
		
		
		return $this->render('InternoteNoteBundle:Note:notelist.html.twig', array('notes' => $notes));
		//		                      AcmeHelloBundle:Hello:index.html.twig
	}

}
?>