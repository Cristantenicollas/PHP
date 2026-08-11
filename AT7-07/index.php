<?php
// Cria um array simples contendo os nomes dos funcionários.
// Cada funcionário fica armazenado em uma posição diferente do array.
$funcionarios = ['Nicollas,','Gregório','Julio','Miguel'];
//cria um for para listar os valores do array
// A variável $i começa em 0 e aumenta de 1 em 1 até chegar à posição 4.
// Em cada repetição, o funcionário armazenado naquela posição é exibido na tela.
for ($i = 0; $i<=4; $i++){
    echo "$funcionarios[$i]</br>";
}
echo "<hr>";
//Usando o foreach para percorrer o array
// A cada repetição, uma posição do array é acessada para realizar a exibição.
foreach($funcionarios as $funcionarios) {
    echo "$funcionario<br>";
}
echo "<hr>";

// Cria um array associativo, também chamado de dicionário.
// Nesse tipo de array, cada informação possui uma chave, como "nome", "idade" e "cargo".
$colaborador = [
    "nome" => "Nicollas",
    "idade" => "29",
    "cargo" => "Instrutor T.I"
];
// Acessa as informações do array usando suas respectivas chaves.
// Dessa forma, é possível exibir apenas os dados que desejamos.
echo "Nome do colaborador: ".$colaborador["nome"]."<br>";
echo "Cargo do colaborador: ".$colaborador["cargo"]."<br>";

echo "<hr>";
// Cria uma matriz contendo vários arrays associativos.
// Cada posição da matriz representa um colaborador com suas próprias informações.
$colab = [
    ["nome" => "Nicollas", "Idade" => "17", "cargo" => "Estudante"],

    ["nome" => "Murillo", "Idade" => "16", "cargo" => "Estudante"],

    ["nome" => "Miguel", "Idade" => "16", "cargo" => "Estudante"],
    ];
// Acessa diretamente a terceira posição da matriz e exibe o cargo do colaborador.
// O índice 2 representa o terceiro colaborador, pois os arrays começam pelo índice 0.
echo $colab[2]["cargo"];
echo "<hr>";
// Utiliza o "foreach" para percorrer todos os colaboradores armazenados na matriz.
// A variável $c recebe um colaborador por vez, permitindo acessar seu nome, idade e cargo.
foreach($colab as $c){
    echo "Nome: ". $c["nome"] . "<br>";
    echo "Idade: ". $c["idade"] . "<br>";
    echo "Cargo: ". $c["cargo"] . "<br>";
    echo"<hr>";
}

