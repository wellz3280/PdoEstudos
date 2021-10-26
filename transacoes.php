<?php
	
	use Weliton\PdoEstudos\Domain\Model\Produto;
	use Weliton\PdoEstudos\Infrastructure\Repository\ProdutoRepository;
	use Weliton\PdoEstudos\Infrastructure\Persistence\ConnectionCreator;

	require_once 'vendor/autoload.php';

	$connection = ConnectionCreator::createConnection();

	$newInsertTest = new ProdutoRepository($connection);

	$connection->beginTransaction();

	//$newInsertTest->retornaArray(7,'Danielle','Eu era inesperiente');
	//$newInsertTest->retornaArray(8,'Camila','Moça interassante e dança muito bem.');
	$produto = new Produto(null,'Feijão super caro','Mano ta carooo');
	
	$newInsertTest->insereBanco($produto);

	$connection->commit();

	