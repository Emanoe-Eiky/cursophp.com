<?php
function defineCategoriaCompetidor(string $nome, string $idade): ?string
{
    $categoria = [];
    $categoria[] = "infantio";
    $categoria[] = "adolecente";
    $categoria[] = "adulto";


    if (ValidaNome($nome) && ValidaIdade($idade)) {
        removerMensagemErro();
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i <= count($categoria); $i++) {
                if ($categoria[$i] == "infantio") {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categoria[$i]);
                    return null;
                }
            }
        } elseif ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i <= count($categoria); $i++) {
                if ($categoria[$i] == "adolecente") {
                    setarMensagemSucesso("O nadador " . $nome . "compete na categoria " . $categoria[$i]);
                    return null;
                }
            }
        } else {
            for ($i = 0; $i <= count($categoria); $i++) {
                if ($categoria[$i] == "adulto") {
                    setarMensagemSucesso("O nadador " . $nome . " Compete na categoria " . $categoria[$i]);
                    return null;
                }
            }
        }
    }
    removerMensagemSucesso();
    return obterMensagemErro();
}
