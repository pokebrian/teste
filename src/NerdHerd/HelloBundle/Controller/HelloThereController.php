<?php
namespace NerdHerd\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloThereController
{
	public function indexAction($name)
	{
		return new Response('<html><body>Hello there '.$name.'!</body></html>');
	}
}
?>