<?php

class Checkip extends Controller
{
	function __construct()
	{
		parent::__construct();

		//echo "<br>Page Index ";
        
		$this->view->Render("Checkip/index");
	}
}
