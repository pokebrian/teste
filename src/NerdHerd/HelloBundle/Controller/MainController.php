<?php
namespace NerdHerd\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
	public function welcomeAction()
	{
		//return new Response('<html><body>Esta é a página inicial, <strong>Bem Vindo!</strong></body></html>');
		
		return $this->render('NerdHerdHelloBundle:Main:index.html.twig', array('name' => "teste"));
//		                      AcmeHelloBundle:Hello:index.html.twig
	}
	
}
?>