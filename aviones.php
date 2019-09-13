<?php
	class aviones extends Transporte
	{
		private $turbinas;

		function __construct($turbinas)
		{
			parent::__construct();
			$this->turbinas=$turbinas;
		}
		public function Encender_Avion()
		{
			$this->Encender();
		}
		public function Apagar_Avion()
		{
			$this->Apagar();
		}
		public function informacion()
		{
			echo "<br />";

			echo "El avion Tiene: ";
			echo "<br />";
			echo "Numero de turbinas: ",$this->turbinas;
			echo "<br />";
			echo "Y esta: ",$this->estado();
		}
	}
?>