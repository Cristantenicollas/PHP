<?php
$horastrabalhadas = 8;
$diastrabalhados = 22;
$Salariohora = 6 * $horastrabalhadas;//O salario por hora é feito pelo valor fixo de 50 reais e pelas horas que você trabalhou 
$salariodia = $Salariohora * $horastrabalhadas;//O salario diario é feito multiplicando o seu salario hora pelas horas trabalhadas
$salariomensal = $salariodia * $diastrabalhados;//O salario mensal é feito multiplicando quanto você ganha por dia e pelos seus dias trabalhados
$aluguelapartamentomes = $salariomensal / 10;//Aqui vai mostrar quanto que você gasta por mês com o aluguel do apartamento

echo "O salario por hora é:".  $Salariohora , "<br>";
echo "O salario diario é:".  $salariodia , "<br>";
echo "O salario mensal é:". $salariomensal , "<br>";
echo "O aluguel do apartamento é: $aluguelapartamentomes<br>";
echo $salariomensal > 1000 ? "Maior que 1000":"menor que 1000";//teste de comparação

?>