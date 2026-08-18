<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa MC</title>
</head>
<body>
    <!-- Formulário para receber os dados do usuário -->
<form action="" method="post">

    <!-- Campo para digitar o nome -->
    <label for="nome">Nome:</label>
    <input type="text" name="nome">
    <br>

    <!-- Campo para digitar a senha -->
    <label for="senha">Senha:</label>
    <input type="password" name="senha">
    <br>

    <!-- Campo para informar a idade -->
    <label for="idade">Idade:</label>
    <input type="number" name="idade">
    <br>

    <!-- Botão para limpar todos os campos do formulário -->
    <input type="reset" value="Limpar">

    <!-- Botão para enviar os dados -->
    <input type="submit" value="Enviar">

    <!-- Linha horizontal para separar o formulário do restante da página -->
    <hr>

</form>

<?php

// Verifica se os três campos foram enviados pelo formulário
if (isset($_POST["nome"], $_POST["idade"], $_POST["senha"])) {

    // Armazena o nome enviado pelo usuário
    $nome = $_POST["nome"];

    // Armazena a idade enviada pelo usuário
    $idade = $_POST["idade"];

    // Armazena a senha enviada pelo usuário
    $senha = $_POST["senha"];

    // Exibe o nome informado
    echo "O seu nome é: " . $nome . "<br>";

    // Exibe a idade informada
    echo "A sua idade é: " . $idade . "<br>";

    // Exibe a senha informada
    echo "A sua senha é: " . $senha . "<br>";
}

?>
    
</body>
</html>