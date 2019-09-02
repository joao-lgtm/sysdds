<?php
	include "classePessoa.php";

	class Gerente extends Pessoa{		
		public $area;
        public $salario;
        public $endereco;
        public $cidade;
        public $estado;
        public $pais;

		public function __construct($vetor){
			parent::__construct($vetor);
			$this->area = $vetor["area"];
            $this->salario = $vetor["salario"];
            $this->endereco = $vetor["endereco"];
            $this->cidade = $vetor["cidade"];
            $this->estado = $vetor["estado"];
			$this->pais = $vetor["pais"];
		}	
	
		function exibe_tr(){
			$this->exibe_trPessoa();
			echo "<td>".$this->area."</td>
                <td>".$this->salario."</td>
                <td>".$this->endereco."</td>
                <td>".$this->cidade."</td>
                <td>".$this->estado."</td>
				<td>".$this->pais."</td>
				</tr>";
		}
	}
		
	function exibe(){
			
		$this->exibe_pessoa();
		
		echo    "<div>	
					<label>Área:</label> ".$this->area."
				</div>						
				<div>	
					<label>Salário:</label> ".$this->salario."
				</div>
				<div>	
					<label>Endereço:</label> ".$this->endereco."
				</div>						
				<div>	
					<label>Cidade:</label> ".$this->cidade."
				</div>
				<div>	
					<label>Estado:</label> ".$this->estado."
				</div>						
				<div>	
					<label>País:</label> ".$this->pais."
				</div>						
		  </fieldset>";
	}
?>
