<?php
	
	class header 
		
	{
		public $title = "PAGE TITLE";
		private $server;
		function __construct(){

			$this->server=$_SERVER['HTTP_USER_AGENT'];

		}
		function getTitle()
		{
			
			return $this->title;
		}
		function getPie(){
			return $this->server;
		}
	}
?>


