<?php

function token($digitos)
{
    $token = "";
    while (strlen($token) < $digitos) {
        $sensibilidade = rand(0, 9); //Define a sensibilidade de alternar LETRA e NUMERO.
        if ($sensibilidade < 3) {
            //Sorteia letras maiusculas.
            $token .= chr(rand(65, 90));
        } else if ($sensibilidade >= 3 && $sensibilidade <= 5) {
            //Sorteia letras minusculas.
            $token .= chr(rand(97, 122));
        } else if ($sensibilidade >= 6 && $sensibilidade < 9) {
            //Sorteia numeros de um único dígito.
            $token .= rand(0, 9);
        }
    }
    return $token;
}
$token = token(8);
echo $token . "<br/>"; //Exibe o token.
echo strlen($token); //Confere o tamanho do token.
