<?php

$token = NULL; //Token indefinido.
$digitos = 8; //Define quantos digitos o token possui.
$flagError = false; //Controla a chamada da mensagem de erro.

for($i=0;$i < $digitos;$i++){
    $sensibilidade = rand(0,9); //Define a sensibilidade de alternar LETRA e NUMERO.

    if(!$flagError){
        if($sensibilidade < 3){
            //Sorteia letras maiusculas.
            $token .= chr(rand(65,90)); 

        }else if($sensibilidade >= 3 && $sensibilidade <= 5){
            //Sorteia letras minusculas.
            $token .= chr(rand(97,122));

        }else if($sensibilidade >= 6 && $sensibilidade <9){
            //Sorteia numeros de um único dígito.
            $token .= rand(0,9);

        } else {
            //Divergência da faixa de sensibilidade e do valor gerado.
            $token = "Erro: Verifique a faixa de sensibilidade";
            $flagError = true;
        }
    }
}

echo $token."<br/>"; //Exibe o token.
echo strlen($token); //Confere o tamanho do token.

?>