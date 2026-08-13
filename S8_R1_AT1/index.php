<?php

// Função simples que exibe uma mensagem na tela
function exibirMsg(){
    echo "Sou uma função";
}

// Executando a função criada anteriormente
exibirMsg();

echo "<hr>";

// Criando uma função que recebe uma informação como parâmetro
function Soccer($exm){
    // Mostra na tela o conteúdo recebido pela função
    echo "$exm";
}

// Enviando uma mensagem para a função
Soccer("Sou um Produto de Futebol");

echo "<br>";
echo "<hr>";

// Função responsável por realizar uma soma
// Os valores $m e $c são recebidos como parâmetros
function somar($m, $c){
    // Calcula os dois valores e exibe o resultado
    echo "A soma é:" . ($m + $c);
}

// Chamando a função e passando os valores 2 e 3
somar(2, 3);

echo "<hr>";

// Função que realiza uma operação de subtração
function subtrai($m, $c){
    // Retorna o resultado da subtração para quem chamou a função
    return $m - $c;
}

// Guardando o resultado retornado pela função em uma variável
$resposta = subtrai(192, 168);

// Exibindo o resultado da subtração
echo "A subtração é:" . $resposta;

echo "<hr>";

// Função que verifica se a senha informada está correta
function verificaSenha($senha){

    // Compara a senha recebida com a senha definida no código
    if ($senha === 123456789){

        // Caso a senha esteja correta, libera o acesso
        return "Acesso concedido";

    } else {

        // Caso a senha esteja incorreta, bloqueia o acesso
        return "Acesso negado";
    }
}

// Testando a função com uma senha incorreta
echo verificaSenha(234575474);

echo "<hr>";

function VerificaLinguagem($Linguagem){
    if ($Linguagem === "PHP"){
        return "A linguagem Usada está correta👌";
    } else {
        return "A linguagem usada está incorreta 😭";
    }
}

echo VerificaLinguagem("PHP");

echo "<hr>";
?>