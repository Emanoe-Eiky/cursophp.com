<?php
function ValidaNome (string $nome) : bool {
    if (empty($nome)){ //empty verifica se a variavel esta vazia
        setarMensagemErro('O nome não pode ser vazio.');
       return false;
     
    }
    else if(strlen($nome) < 3){           //strlen conta quantas caracterias tem na strings
        setarMensagemErro('O nome deve conter mais que 3 caracter');
        return false;
    
    }
    else if(strlen($nome) > 40){
        setarMensagemErro('O nome e muito estenso');
        return false;
    }
    return true;    
}
function ValidaIdade (string $idade) : bool {
  if(!is_numeric($idade)){
    setarMensagemErro("informe um número pra idade");
  return false;   
}
return true;
}


