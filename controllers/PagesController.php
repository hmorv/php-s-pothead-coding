<?php

class PagesController
{
	public function home()
	{
		require 'views/home.view.php';
	}
	public function about()
	{
		require 'views/about.view.php';
	}
	public function contact()
	{
		require 'views/contact.view.php';		
	}
}