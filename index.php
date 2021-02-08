<?php
session_start();
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
  
    
    <br/>
    <p>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</p>
     <br>
<form action="script.php" method="post">
     <?php 
     $MensagemSuceso = isset($_SESSION['MensagemSuceso']) ? $_SESSION['MensagemSuceso'] : '';
     if(!empty($MensagemSuceso)){
        echo $MensagemSuceso;
    }
        $MensagemDeErro = isset($_SESSION['MensagemDeErro']) ? $_SESSION['MensagemDeErro'] : '';
         if(!empty($MensagemDeErro)){
            echo $MensagemDeErro;
        }
     ?>
    
    <p>Seu nome <input type="text" name="nome"/><p>
    
 
    <p>Sua idade <input type="text" name="idade"/></p>    
    <p> <input type="submit" value="Envie seus dados"/></p>


</form>
</body>
</html>