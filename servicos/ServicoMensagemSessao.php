<?php
session_start();
function setarMensagemErro (string $mensagem) : void{
    unset($_SESSION['Mensagem-de-erro']);
    unset($_SESSION['Mensagem-de-Sucesso']);
    $_SESSION['Mensagem-de-erro'] = $mensagem;
}
function obterMensagemErro () : ?string {
    // unset($_SESSION['Mensagem-de-erro']);
    if (isset($_SESSION['Mensagem-de-erro'])){
        return $_SESSION['Mensagem-de-erro'];
    }
    return null; 
}

function setarMensagemSucesso (string $mensagem) : void{
    unset($_SESSION['Mensagem-de-Sucesso']); //Para remover a mensagem de Sucesso
    unset($_SESSION['Mensagem-de-erro']); //Para remover a mensagem de Sucesso
    $_SESSION['Mensagem-de-Sucesso'] = $mensagem;
}
function obterMensagemSucesso () : ?string {
    // unset($_SESSION['Mensagem-de-Sucesso']);
    if(isset($_SESSION['Mensagem-de-Sucesso']))
       { return $_SESSION['Mensagem-de-Sucesso'];}
    return null;
}

// function removerMensagemErro () : void {
//     if(isset($_SESSION['Mensagem-de-erro'])){
//          unset($_SESSION['Mensagem-de-erro']);}
// }
// function removerMensagemSucesso () : void{
//     if(isset($_SESSION['Mensagem-de-Sucesso']))
//         unset($_SESSION['Mensagem-de-Sucesso']);
