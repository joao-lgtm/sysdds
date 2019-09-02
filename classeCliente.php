<?php
	include "classePessoa.php";

	class Cliente extends Pessoa{
        public $endereco;
        public $cidade;
        public $estado;
        public $pais;

		public function __construct($vetor){
			parent::__construct($vetor);
            $this->endereco = $vetor["endereco"];
            $this->cidade = $vetor["cidade"];
            $this->estado = $vetor["estado"];
			$this->pais = $vetor["pais"];
		}	
		
		function exibe(){
			
			$this->exibe_pessoa();
			
			echo    "
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
		function exibe_tr(){
			$this->exibe_trPessoa();
			echo "<td>".$this->endereco."</td>
                <td>".$this->cidade."</td>
                <td>".$this->estado."</td>
				<td>".$this->pais."</td>
				</tr>";
		}
	}
?>