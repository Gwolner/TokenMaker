<?php

$token = NULL; //Token indefinido
$digitosToken = 8; //Define quantos digitos o token possui

for($i=0;$i < $digitosToken;$i++){

    $flag = rand(0,8); // Define a sensibilidade de alternar LETRA e NUMERO
    
    if($flag < 3){
        $token .= chr(rand(65,90)); // Sorteia Letras maiusculas
    }
    else if($flag >= 6){
        $token .= chr(rand(97,122)); // Sorteia Letras minusculas
    }
    else {
        $token .= rand(0,9); // Sorteia numeros de um único dígito
    }
}

echo $token."<br/>"; // Exibe o token
echo strlen($token); //Confere o tamanho do token

?>