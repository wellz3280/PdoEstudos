<?php

	namespace Weliton\PdoEstudos\Domain\Model;


class Produto 
{
	private ?int $idProduto;
	private string $nameProduto;
	private string $descriptionProduto;



	public function __construct(?int $idProduto, string $nameProduto,string $descriptionProduto)
	{
		$this->idTeste = $idProduto;
		$this->nameTeste = $nameProduto;
		$this->descriptionTeste = $descriptionProduto;

	}

	public function id():int
	{
	    return $this->idProduto;
	}

	public function name():string
	{
	    return $this->nameProduto;
	}

	public function description():string
	{
	    return $this->descriptionProduto;
	}


}