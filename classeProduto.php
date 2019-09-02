<?php
class ProdutoNaoPerecivel{
	public $nome;
	public $descricao;
	public $tipo;
	public $unidade;
	public $preco;
	
	
	function __construct($vetor){
		$this->nome = $vetor["nome"];
		$this->descricao = $vetor["descricao"];
		$this->unidade = $vetor["unidade"];
		$this->preco = $vetor["preco"];
	}
	

	function exibicao_unitaria(){
		echo "<fieldset>
					<div>
						<label>Nome:</label> ".$this->nome."
					</div>
					<div>
						<label>Descrição:</label> ".$this->descricao."
					</div>
					<div>	
						<label>Preço/Unidade:</label>
							R$ ".$this->preco." / ".$this->unidade." 
					</div>
			  ";
	}
	
	function exibicao_trProduto(){
		echo "<tr>
				<td>".$this->nome."</td>
				<td>".$this->descricao."</td>
				<td>".$this->preco."</td>
				<td>".$this->unidade."</td>
			  ";
	}

}
?>
