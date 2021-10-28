<?php
	
	use Weliton\PdoEstudos\Domain\Model\Produto;
	use Weliton\PdoEstudos\Infrastructure\Repository\ProdutoRepository;
	use Weliton\PdoEstudos\Infrastructure\Persistence\ConnectionCreator;

	require_once 'vendor/autoload.php';

	$connection = ConnectionCreator::createConnection();

	$newInsertTest = new ProdutoRepository($connection);

	//$connection->beginTransaction();

	//$newInsertTest->retornaArray(7,'Danielle','Eu era inesperiente');
	//$newInsertTest->retornaArray(8,'Camila','Moça interassante e dança muito bem.');
	$produto = new Produto(null,'carne de Rã','Que absurdo é igual a frango');
		$newInsertTest->insereBanco($produto);
	
	//$produto2 = new Produto(null,'Linguiça toscana de milão','Milão é logo ali rsrs');
		//$newInsertTest->insereBanco($produto2);
	
	//$produto3 = new Produto(null,'Cachaça tipo corotinho uau','Nem fiquei louco ');
		//$newInsertTest->insereBanco($produto3);
	

	//$connection->commit();

	