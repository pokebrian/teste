<?php
namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
	public function indexAction($name)
	{
		return new Response('<html><body>Hello there '.$name.'!</body></html>');
	}
}
?>