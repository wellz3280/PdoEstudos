<?php

	namespace Weliton\PdoEstudos\Domain\Repository;

	use Weliton\PdoEstudos\Domain\Model\Produto;
interface ProdutoRepositoryInter
{
	
	public  function insereBanco(Produto $produto):Bool;
	public  function showProduto(string $tabela):array;
	public  function remove(Produto $produto):boll;
	//public  function update():bool;
	
}