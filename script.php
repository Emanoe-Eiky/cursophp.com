<?php
session_start();

$categoria =[];
$categoria [] = "infantio";
$categoria [] = "adolecente";
$categoria [] ="adulto";
$nome =$_POST['nome'];
$idade =$_POST['idade'];
if (empty($nome)){ //empty feriifica se a variavel esta vazia
    $_SESSION['MensagemErro'] = 'nome não pode ser vazio, por favor preencha o novamente '; //array açossiativo e arry numeroco
    header('Location: index.php');
    
}
else if(strlen($nome) < 3){           //strlen conta quantas caracterias tem na strings
  $_SESSION['MensagemErro'] = 'O nome de conter mais 3 caractere';
  header('Location: index.php');
}
else if(strlen($nome) > 40){
    $_SESSION['MensagemErro'] = 'O nome e muito estenso';
    header('Location: index.php');
}
else if(!is_numeric($idade)){
    $_SESSION['MensagemErro'] = 'Informe um número pra idade';
    header('Location: index.php');
    return;
}


//  var_dump ($nome);
//  var_dump ($idade);
 if ($idade >= 6 && $idade <= 12){
     for($i = 0; $i <= count($categoria); $i++){
         if($categoria[$i] == "infantio"){
             $_SESSION['MensagemSuceso'] = "O nadador ".$nome. " compete na categoria ".$categoria[$i];
             header('Location: index.php');
         }
     }
 }
 elseif($idade >= 13 && $idade <= 18){
     for($i = 0; $i <= count($categoria); $i++){
        if($categoria[$i] == "adolecente"){
            $_SESSION['MensagemSuceso'] =  "O nadador ".$nome. " compete na categoria ".$categoria[$i];
            header('Location: index.php');

            }

     }

 }
 else {
     for($i = 0; $i <= count($categoria); $i ++){
         if($categoria[$i] == "adulto")
            $_SESSION['MensagemSuceso'] = "O nadador ".$nome. " Compete na categoria ".$categoria[$i];
            header('Location: index.php');
         
     }
 }