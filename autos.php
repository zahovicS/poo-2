<?php
	class autos extends Transporte
	{
		private $puertas;
		private $pasajeros;
		private $ruedas;

		function __construct($puertas,$pasajeros,$ruedas)
		{
			parent::__construct();
			$this->puertas=$puertas;
			$this->pasajeros=$pasajeros;
			$this->ruedas=$ruedas;
		}
		public function Encender_Auto()
		{
			$this->Encender();
		}
		public function Apagar_Auto()
		{
			$this->Apagar();
		}
		public function info()
		{
			echo "<br />";

			echo "El auto Tiene: ";
			echo "<br />";
			echo "Numero de puertas: ",$this->puertas;
			echo "<br />";
			echo "Numero de pasajeros: ",$this->pasajeros;
			echo "<br />";
			echo "Numero de Ruedas: ",$this->ruedas;
			echo "<br />";
			echo "Y esta: ",$this->estado();
		}
	}
?>