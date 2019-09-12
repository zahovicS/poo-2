<?php 
class clase
{
	public static $nombres;

	public function mostrar()
	{
		echo "metodo mostrar()";
		echo "<br />";
		echo self::$nombres;
	}
}
?>