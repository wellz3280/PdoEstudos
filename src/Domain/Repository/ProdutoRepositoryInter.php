<?php

	namespace Weliton\PdoEstudos\Domain\Repository;

	use Weliton\PdoEstudos\Domain\Model\Produto;
interface ProdutoRepositoryInter
{
	
	public  function insereBanco(Produto $idProduto, $nameProduto,$descriptionProduto):array;
	public  function showProduto():array;
	//public  function remove():boll;
	//public  function update():bool;
	
}