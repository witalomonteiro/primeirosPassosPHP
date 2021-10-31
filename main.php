<?php
// Variaveis
// $nome = "Witalo Monteiro";
// echo "Bem Vindo, {$nome}";

// Inteiros
// $idade = 28;
// echo $idade + 10;

// Tipos de Dados
// $inteiro = 10;
// $decimal = 99.9;
// $texto = "Palavra";
// $char = 'C';
// $boleano = True;

// echo gettype($char);


// Strings
// $primeiroNome = "Witalo";
// $segundoNome = "Monteiro";
// $idade = 28;

// echo "Olá, Mundo!\n";
// echo "Meu nome é {$primeiroNome} {$segundoNome}!".PHP_EOL;
// echo "Tenho {$idade} anos.";

// IF, ELSE IF AND ELSE
// "or" e "and" ou "||" e "&&"
// $idade = 17;
// $nome = 'Witalo Monteiro';

// if ($idade >= 18) {
//     echo "Você tem {$idade}! Pode Entrar!";
// } else if ($nome == 'Witalo Monteiro') {
//     echo "Você é o Chefe! Pode Entrar!";
// } else {
//     echo "Você tem {$idade}! Não é permitido entrada de menores de 18!";
// }

// Estruturas de Repetição
// "while", "do-while" e "for"
// $cont = 0;

// while ($cont <= 10) {
//     echo "# {$cont}".PHP_EOL;
//     $cont++;
// }

// for ($cont = 0; $cont <= 10; $cont++) {
//     if ($cont == 5) { continue; }
//     if ($cont == 7) { break; }
//     echo "# {$cont}".PHP_EOL;
// }

// Desafio #001 - Listar Impares
// for ($i = 0; $i <= 100; $i++) {
//     if ($i % 2 == 0) { continue; }
//     echo "# {$i}".PHP_EOL;
// }

// Desafio #002 - Tabua
// $n = 5;
// for ($i = 1; $i < 10; $i++) {
//     $r = $n * $i;
//     echo "$n x $i = $r".PHP_EOL;
// }


// Desafio #003 - IMC
$altura = 1.74;
$peso = 78;
$imc = number_format($peso / pow($altura, 2), 2, ',');

echo "IMC: $imc".PHP_EOL;
echo "Classificação: ";
if ($imc < 18.5) {
    echo "MAGREZA";
} else if ($imc >= 18.5 && $imc <= 24.9) {
    echo "NORMAL";
} else if ($imc >= 25.0 && $imc <= 29.9) {
    echo "SOBREPESO";
} else if ($imc >= 30.0 && $imc <= 39.9) {
    echo "OBESIDADE";
} else if ($imc >= 40.0) {
    echo "OBESIDADE	GRAVE";
} else {
    echo "ERROR!";
}