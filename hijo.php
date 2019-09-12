<?php
	class hijo extends base
	{
		private $titulo;
		private $cargo;

		function __construct($nombres,$apellidos,$titulo,$cargo)
		{
			parent::__construct($nombres,$apellidos);
			$this->titulo=$titulo;
			$this->cargo=$cargo;
		}
		public function mostrar()
		{
			$this->show();
			echo "<br/>";
			echo $this->titulo,PHP_EOL, $this->cargo;
		}
	}
?>