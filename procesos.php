<?php 
class procesos
{
	public static $cantidad1;
	public static $cantidad2;

	public function potencia()
	{
		echo "<br />";
		echo "La potencia de ",self::$cantidad1," y ",self::$cantidad2,"es: ";
		/*$n1=self::$cantidad1;
		$n2=self::$cantidad2;
		$resultado=pow($n1,$n2);*/
		$resultado=pow(self::$cantidad1,self::$cantidad2);
		//$resultado=pow($n1,$n2);
		echo $resultado;
	}
	public function residuo()
	{
		echo "<br />";
		echo "Residuo de ",self::$cantidad1," con ",self::$cantidad2," es: ";
		$resultado=self::$cantidad1 % self::$cantidad2;
		echo $resultado;	
	}
	public function raiz()
	{
		echo "<br />";
		echo "Raiz Cuadrada de ",self::$cantidad1," es: ";
		$resultado=sqrt(self::$cantidad1);
		echo $resultado;
	}
	public function factorial()
	{
		
		echo "<br />";
		echo "El factorial de ",self::$cantidad1," es: ";
		$s=1;
		while(self::$cantidad1>=1){
			$s=self::$cantidad1 * $s;
			self::$cantidad1--;
		}
		echo $s;
	}
}
?>