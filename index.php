<?php
include "servicos/ServicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="Width=device-width, initial-scale=1">
    <link rel= "stylesheet" href="">
    <title>FORMULARIO</title>
</head>
<body>
  <div class="titulo">
    <div class="">
    <br/>
    <p>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</p>
 
<form action="script.php" method="post">
    <?php
        $MensagemErro = obterMensagemErro();
        if (!empty($MensagemErro)){
            echo $MensagemErro;
        }
        $MensagemSucesso = obterMensagemSucesso();
        if(!empty($MensagemSucesso)){
            echo $MensagemSucesso;
        }
    ?>
    <p>Seu nome <input type="text" name="nome"/></p>
  
    <p>Sua idade <input type="text" name="idade"/></p>
 
    <p> <input type="submit" value="Envie seus dados"/></p>
   
   

</form>

</body>
</html>