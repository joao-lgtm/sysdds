<?php
class Pessoa{
	public $nome;
	public $email;
	public $cpf;
	public $sexo;
	public $data_nascimento;
	
	
	function __construct($vetor){
		$this->nome = $vetor["nome"];
		$this->email = $vetor["email"];
		$this->cpf = $vetor["cpf"];
		$this->sexo = $vetor["sexo"];
		$this->data_nascimento = $vetor["data_nascimento"];
	}
	

	function exibe_pessoa(){
		echo "<fieldset>
					<div>
						<label>Nome:</label> ".$this->nome."
					</div>
					<div>
						<label>Email:</label> ".$this->email."
					</div>
					<div>
						<label>CPF:</label> ".$this->cpf."
					</div>
					<div>	
						<label>Sexo:</label> ".$this->sexo."
					</div>
					<div>	
						<label>Data Nasc:</label> ".$this->data_nascimento."
					</div>	
			  ";
	}
	
	function exibe_trPessoa(){
		echo "<tr>
				<td>".$this->nome."</td>
				<td>".$this->email."</td>
				<td>".$this->cpf."</td>
				<td>".$this->sexo."</td>
				<td>".$this->data_nascimento."</td>
			  ";
	}

}
?>




















<?php
/*

*/
?>