<?php
namespace Internote\NoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Entity;


class NoteFormController extends Controller
{
	public function formAction()
	{
		$note = "teste";//new Note();
		
		return $this->render('InternoteNoteBundle:Note:noteform.html.twig', array('note' => $note));
	}

}
?>