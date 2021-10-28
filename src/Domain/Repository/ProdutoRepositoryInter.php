<?php

	namespace Weliton\PdoEstudos\Domain\Repository;

	use Weliton\PdoEstudos\Domain\Model\Produto;
interface ProdutoRepositoryInter
{
	
	public  function insereBanco(Produto $produto):bool;
	public  function showProduto(string $tabela):array;
	public  function remove(int $idProduto, string $tabela):bool;
	public  function update(Produto $produto, string $tabela):bool;
	
}