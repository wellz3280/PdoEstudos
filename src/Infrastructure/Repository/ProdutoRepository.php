<?php
	
	namespace Weliton\PdoEstudos\Infrastructure\Repository;
	
	use Weliton\PdoEstudos\Domain\Model\Produto;
	use Weliton\PdoEstudos\Domain\Repository\ProdutoRepositoryInter;
	use PDO;

class ProdutoRepository implements ProdutoRepositoryInter
{
	private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

	
	/** @var $idProduto @var $nameProduto @var $descriptionProduto **/
	public function showProduto():array
	{
		/**
		 * campos da tabela testes
		 * id
		 * name
		 * description
		 * */

	   $sql = " SELECT * FROM testes";
		$statement = $this->connection->query($sql);

		$result = $statement->fetchAll();
		$listaProduto = [];
		foreach ($result as $dataProduto) {
				$listaProduto[] = new Produto(
					$dataProduto['id'],
					$dataProduto['name'],
					$dataProduto['description']
				);	
		
				
			
		}
			return $listaProduto;

	}

	public  function insereBanco(Produto $produto):bool
	{

		$sql = "INSERT INTO testes 
			(id,name,description) VALUES (?,?,?)
		";

		$insertSql = $this->connection->prepare($sql);

		$produtoArray = [
			1 =>
			['dataBd'=> $produto->id()],
			2 =>
			['dataBd'=> $produto->name()],
			3=>
			['dataBd'=> $produto->description()]
		];


		foreach($produtoArray as $indice => $produtos){
			
			$insertSql->bindValue($indice,$produtos['dataBd']);
		}

		if($insertSql->execute() === false){
			echo "opa Algo deu errado";
			return false;
		}else{
			echo "iserido com sucesso";
			return true;
		}

	}




}
