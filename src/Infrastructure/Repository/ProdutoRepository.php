<?php
	
	namespace Weliton\PdoEstudos\Infrastructure\Repository;
	
	use Weliton\PdoEstudos\Domain\Model\Produto;
	use Weliton\PdoEstudos\Domain\Repository\ProdutoRepositoryInter;
	use PDO;

class ProdutoRepository implements ProdutoRepositoryInter
{
	private PDO $connection;
	private string $tabela;
	private int $idProduto;

    public function __construct(PDO $connection)
    {
    	
        $this->connection = $connection;

    }

	
	/** @var $idProduto @var $nameProduto @var $descriptionProduto **/
	

	public function showProduto(string $tabela):array
	{
		/**array
		 * campos da tabela testes
		 * id
		 * name
		 * description
		 * */

	   $sql = " SELECT * FROM {$tabela}";
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

	public function insereBanco(Produto $produto):bool
	{	


		$sql = "INSERT INTO produdo 
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

	public function remove(int $idProduto, string $tabela):bool
	{
		$sql = "DELETE FROM {$tabela} WHERE id = ?;";

		$delete = $this->connection->prepare($sql);
		$delete->bindValue(1,$idProduto, PDO::PARAM_INT);

		if($delete->execute() === false){
			echo "opa Algo deu erra ao";
			return false;
		}else{
			echo "deletado com sucesso";
			return true;
		}

	}

	public  function update(Produto $produto):bool
	{
		
	}



}
