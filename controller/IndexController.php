<?php
session_start();
class IndexController
{
	private $model;
	private $template;
	private $header;
	private $footer;
	private $nav;

	private $fileName = 'indexView';
	public function __construct()
	{
		$this->header = 'includes/header.php';
		$this->footer = 'includes/footer.php';
		$this->nav = 'includes/nav.php';
	} //end constructor
	public function invoke()
	{
		if (!isset($_GET['action']))
		{
			$this->template = 'view/'.$this->fileName.'Template.php';
			include_once('view/'.$this->fileName.'.php');
			//create a new view and pass it our template
			$view = new IndexView($this->template,$this->header,$this->footer,$this->nav);
			$content ="";
			$view->assign('title' , 'Loggged in');
			$view->assign('content' , $content);
		}

	} // end function
} //end class