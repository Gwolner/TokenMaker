# Token maker <img src="logo/php.png" width="70" height="40" align="right">

Gerador de token PHP para atender as necessidades de algumas aplicações desenvolvidas no Depart. de Gestão de Tecnologia da Informação (DGTI) do IFPE campus Recife. 

## Características

Diferente de outros geradores simples, o Token maker permite definir quantos dígitos formam o token ou definir uma faixa de digitos para se criar de vários tamanhos diferentes. Também permite ajustes para gerar mais letras ou números, conforme necessidade do projeto.

Também permite expansão para incluir caracteres especiais no token gerado.

## O código

Define a quantidade de dígitos que o token deve possuir.
```php
$digitos = 8; 
```

É possível gerar uma quantidade aleatória (Entre 6 e 8 dígitos, por exemplo).
```php
$digitos = rand(6,8);
```

Define a sensibilidade de alternar entre letras maiúscula, minúscula e números.
```php
$sensibilidade = rand(0,8);
```

A sensibilidade define se o token tende a gerar mais letras maiúscula, minúscula ou números em sua composição.

Para cada dígito do token é sorteado um valor (no snippet acima, de 0 a 8) correspondente a um tipo de caractere que irá compor o token.

Por default, valores sorteados de 0 a 2 geram letras maiusculas, de 3 a 5 letras minusculas e de 6 a 9 numeros de um único dígito. É possível alterar essa 

```php
 $sensibilidade = rand(0,8);
    
    if($sensibilidade < 3){
        $token .= chr(rand(65,90)); // Sorteia letras maiusculas
    }
    else if($sensibilidade >= 6){
        $token .= chr(rand(97,122)); // Sorteia letras minusculas
    }
    else {
        $token .= rand(0,9); // Sorteia numeros
    }
```

Pode-se visualizar o token gerado
```php
echo $token; 
```

E também conferir seu tamanho
```php
echo strlen($token); 
```
