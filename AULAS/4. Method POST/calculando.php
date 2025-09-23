<?php
echo "<h2>Bem vindo!</h2>";
echo "Valor 1: ".$_POST["valor1"]."<br/>";
echo "Valor 2: ".$_POST["valor2"]."<br/><br/><br/>";

$valor1 = floatval($_POST["valor1"]);
$valor2 = floatval($_POST["valor2"]);

$somados = $valor1+$valor2;
$subtraidos = $valor1-$valor2;
$multiplicados = $valor1*$valor2;   
$divididos = $valor1/$valor2;

echo "Resultados:<br/><br/>";

echo "Valor 1 + Valor 2: ".$somados."<br/>";
echo "Valor 1 - Valor 2: ".$subtraidos."<br/>";
echo "Valor 1 * Valor 2: ".$multiplicados."<br/>";
echo "Valor 1 / Valor 2: ".$divididos."<br/><br/>";

echo "<form action='calcular.html '><button>voltar</button></form>"; 
