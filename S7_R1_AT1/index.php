<?php
// Cria um array simples contendo os nomes dos Trabalhadores.
// Cada funcionário fica armazenado em uma posição diferente do array.
$trabalhadores = ['Vitor','João','Gabriel','Rafael','Pedro','Murillo','Miguel'];
//cria um for para listar os valores do array
// A variável $i começa em 0 e aumenta de 1 em 1 até chegar à posição 4.
// Em cada repetição, o funcionário armazenado naquela posição é exibido na tela.
for ($i = 0; $i<=6; $i++){
    echo "$trabalhadores[$i]</br>";
}
echo "<hr>";
//Usando o foreach para percorrer o array
// A cada repetição, uma posição do array é acessada para realizar a exibição.
foreach($trabalhadores as $trabalhador) {
    echo "$trabalhador<br>";
}
echo "<hr>";

// Cria um array associativo, também chamado de dicionário.
// Nesse tipo de array, cada informação possui uma chave, como "nome", "idade" e "cargo".
$colaborador = [
    "nome" => "Nicollas",
    "idade" => "27",
    "cargo" => "Engenheiro de Software"
];
// Acessa as informações do array usando suas respectivas chaves.
// Dessa forma, é possível exibir apenas os dados que desejamos.
echo "Nome do colaborador: ".$colaborador["nome"]."<br>";
echo "Cargo do colaborador: ".$colaborador["cargo"]."<br>";
echo "Idade do colaborador: ".$colaborador["idade"];

echo "<hr>";
// Cria uma matriz contendo vários arrays associativos.
// Cada posição da matriz representa um colaborador com suas próprias informações.
$colab = [
    ["nome" => "Vitor", "idade" => "20", "cargo" => "Desenvolvedor Full Stack"],

    ["nome" => "Rafael", "idade" => "24", "cargo" => "Desenvolvedor Front-end"],

    ["nome" => "Gabriel", "idade" => "27", "cargo" => "Desenvolvedor Back-end"],

    ["nome" => "João", "idade" => "34", "cargo" => "Administrador de Banco de Dados (DBA)"],

    ["nome" => "Pedro", "idade" => "28", "cargo" => "Cientista de Dados"],

    ["nome" => "Murillo", "idade" => "30", "cargo" => "Engenheiro de Dados"],

    ["nome" => "Miguel", "idade" => "23", "cargo" => "Administrador de Redes"],
    ];
// Acessa diretamente a terceira posição da matriz e exibe o cargo do colaborador.
// O índice 2 representa o terceiro colaborador, pois os arrays começam pelo índice 0.
echo $colab[4]["cargo"];
echo "<hr>";
// Utiliza o "foreach" para percorrer todos os colaboradores armazenados na matriz.
// A variável $c recebe um colaborador por vez, permitindo acessar seu nome, idade e cargo.
foreach($colab as $c) {
    echo "Nome: ". $c["nome"] . "<br>";
    echo "Idade: ". $c["idade"] . "<br>";
    echo "Cargo: ". $c["cargo"] . "<br>";
    echo"<hr>";
}
