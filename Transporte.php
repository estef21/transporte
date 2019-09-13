<?php 

class Transporte
{
	private $marca;
	private $modelo;

	function __construct($marca,$modelo)
	{
		$this->marca=$marca;
		$this->modelo=$modelo;
	}

	protected function encender()
	{
		echo "encendiendo...";
	}

	protected function apagar()
	{
		echo "apagando ...";
	}

}



 ?>