<?php

	namespace Weliton\PdoEstudos\Domain\Model;


class Teste 
{
	private ?int $idTeste;
	private string $nameTeste;
	private string $descriptionTeste;



	public function __construct(?int $idTeste, string $nameTeste,string $descriptionTeste)
	{
		$this->idTeste = $idTeste;
		$this->nameTeste = $nameTeste;
		$this->descriptionTeste = $descriptionTeste;

	}

	public function id():int
	{
	    return $this->idTeste;
	}

	public function name():string
	{
	    return $this->nameTeste;
	}

	public function description():string
	{
	    return $this->descriptionTeste;
	}
}