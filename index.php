<?php

	use Weliton\PdoEstudos\Domain\Model\Produto;
	use Weliton\PdoEstudos\Infrastructure\Repository\ProdutoRepository;
	use Weliton\PdoEstudos\Infrastructure\Persistence\ConnectionCreator;

	require_once 'vendor/autoload.php';
	
	$pdo = ConnectionCreator::createConnection();

	/**
	 * tabela testes
	 * id
	 * name
	 * description
	 **/
	

	$teste = new ProdutoRepository($pdo);

	$repository = $teste->showProduto();
	echo "<pre>";
		var_dump($repository);
	echo "</pre>";
	
	exit();
	while($testelista = $teste->fetch(PDO::FETCH_ASSOC)){
		$showList = new Produto(
			$testelista['id'],
			$testelista['name'],
			$testelista['description']
		);
	}

