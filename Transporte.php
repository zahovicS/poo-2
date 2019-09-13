<?php
	class Transporte
	{
		private $estado;
		private $marca;
		private $modelo;
		function __construct($marca,$modelo)
		{
			$this->estado="Apagado";
			$this->marca=$marca;
			$this->modelo=$modelo;
		}
		protected function estado()
		{
			echo $this->estado;
		}
		protected function Encender()
		{
			$this->estado="Encendido";
			echo "Encendiendo vehiculo...";
		}
		protected function Apagar()
		{
			$this->estado="Apagado";
			echo "Apagando vehiculo...";
		}
	}
?>