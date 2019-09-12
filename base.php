<?php
	class base
	{

		private $nombres;
		private $apellidos;

		function __construct($nombres,$apellidos)
		{
			$this->nombres=$nombres;
			$this->apellidos=$apellidos;
		}
		protected function show()
		{
			echo $this->nombres, PHP_EOL, $this->apellidos;	
		}
	}
?>