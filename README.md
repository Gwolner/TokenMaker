# Token Maker <img src="logo/php.png" width="70" height="40" align="right">

> Gerador de token PHP para atender as necessidades de algumas aplicações desenvolvidas no Depart. de Gestão de Tecnologia da Informação (DGTI) do IFPE campus Recife. 

## Características

Diferente de outros geradores mais simples, o Token Maker permite definir quantos dígitos compõe o token, ajustar a sensibilidade para gerar mais letras ou números, conforme necessidade do projeto.

Apresenta flexibilidade de modificações no código, de modo a permitir gerar token com caracteres especiais. Além disso, conta com uma flag que é acionada quando é encontrada alguma inconsistência nas definições de caracteres.

## Variáveis e parâmetros

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
A sensibilidade, juntamente com as confições dos IFs, define se o token tende a gerar mais letras maiúscula, minúscula ou números em sua composição.

Flag de controle de erro. Caso apareça alguma inconsistência, muda de <b>false</b> para <b>true</b>.
```php
$flagError = false;
```

## Funcionamento

Para cada dígito do token é sorteado um valor (no snippet abaixo, de 0 a 8) correspondente a um tipo de caractere que irá compor o token. Por default, valores sorteados de 0 a 2 geram letras maiusculas, de 3 a 5 letras minusculas e de 6 a 9 numeros de um único dígito.

```php
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
```

## Mensagem de erro

Durante a criação de qualquer dígito do token, se ele não satisfizer nenhuma condição presente nos IFs, ele irá entrar no ELSE. Desta forma, independente de quantos dígitos ja tenham sido criados para o token, ele será substituido por uma mensagem e irá acionar a flag de erro. 

Com a flag acionada nenhum novo dígito que possa vir a pertencer ao token será gerado. Isto evita que qualquer dígito seguinte seja concatenado com o final da mensagem de erro.

## Visualizando token 

Visualizar token gerado ou a mensagem de erro
```php
echo $token; 
```
```
//Saída do token
4FmwXD5q

//Saída da mensagem
Erro: Verifique a faixa de sensibilidade
```

Conferindo tamanho do token ou da mensagem.
```php
echo strlen($token);
```
```
//Saída do token
8

//Saída da mensagem
40
```

É importante fazer uma checagem prévia do que está sendo gerado para certificar-se que não há condições que gerem erro e que o tamanho e caracteres do token gerado condiz com o esperado. 
