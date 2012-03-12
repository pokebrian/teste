<?php
namespace Internote\NoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
	public function listAction()
	{
		//return new Response('<html><body>Esta é a página inicial, <strong>Bem Vindo!</strong></body></html>');

		return $this->render('NerdHerdHelloBundle:Note:notelist.html.twig', array('name' => "teste"));
		//		                      AcmeHelloBundle:Hello:index.html.twig
	}

}
?>