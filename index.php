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
	

	//$teste = new ProdutoRepository($pdo);

	//$tabela = "produdo";

	$produto = new Produto(12,'pocisão 1','pocisão 2');
	$array = [$produto->id(),$produto->name(),$produto->description()];
	//var_dump($produto);

	//echo implode(',',array_fill(0, count($array), '?'));
		


	exit();
	$repository = $teste->showProduto($tabela);
	echo "<pre>";
		var_dump($repository);
	echo "</pre>";
	
	while($testelista = $teste->fetch(PDO::FETCH_ASSOC)){
		$showList = new Produto(
			$testelista['id'],
			$testelista['name'],
			$testelista['description']
		);
	}

