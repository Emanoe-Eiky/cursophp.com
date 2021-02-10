<?php

include "servicos/ServicoMensagemSessao.php";
include "servicos/ServicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);
header('Location: index.php');
