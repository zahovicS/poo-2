<?php
	class Transporte
	{
		private $estado;

		function __construct()
		{
			$this->estado="Apagado";
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