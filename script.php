<?php
$categoria =[];
$categoria [] = "infantio";
$categoria [] = "adolecente";
$categoria [] ="adulto";
$nome =$_POST['nome'];
$idade =$_POST['idade'];
if (empty($nome)){ //empty feriifica se a variavel esta vazia
    echo 'O nome não pode ser vazio';
    return;
}
if(strlen($nome) < 3){           //strlen conta quantas caracterias tem na strings
    echo 'O nome deve conter mais que 3 caracter';
    return;
}
if(strlen($nome) > 40){
    echo 'O nome e muito estenso';
    return;
}
if(!is_numeric($idade)){
    echo "informe um número pra idade";
    return;
}


//  var_dump ($nome);
//  var_dump ($idade);
 if ($idade >= 6 && $idade <= 12){
     for($i = 0; $i <= count($categoria); $i++){
         if($categoria[$i] == "infantio"){
             echo "O nadador ".$nome. " compete na categoria ".$categoria[$i];
         }
     }
 }
 elseif($idade >= 13 && $idade <= 18){
     for($i = 0; $i <= count($categoria); $i++){
        if($categoria[$i] == "adolecente"){
            echo "O nadador ".$nome. "compete na categoria ".$categoria[$i];

            }

     }

 }
 else {
     for($i = 0; $i <= count($categoria); $i ++){
         if($categoria[$i] == "adulto")
            echo "O nadador ".$nome. " Compete na categoria ".$categoria[$i];
         
     }
 }