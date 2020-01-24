<?php

$token = NULL; //Token indefinido
$digitos = 8; //Define quantos digitos o token possui

for($i=0;$i < $digitos;$i++){

    $sensibilidade = rand(0,8); // Define a sensibilidade de alternar LETRA e NUMERO
    
    if($sensibilidade < 3){
        $token .= chr(rand(65,90)); // Sorteia letras maiusculas
    }
    else if($sensibilidade >= 6){
        $token .= chr(rand(97,122)); // Sorteia letras minusculas
    }
    else {
        $token .= rand(0,9); // Sorteia numeros de um único dígito
    }
}

echo $token."<br/>"; // Exibe o token
echo strlen($token); //Confere o tamanho do token

?>