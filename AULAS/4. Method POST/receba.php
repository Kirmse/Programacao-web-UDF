<?php 
echo "bem vindo ".$_POST["campo"]."<br/>";
$idade10 = intval($_POST["idade"]); 
$idade10 += 10;
echo "Daqui a 10 anos você terá ".$idade10."<br/><br/>";
echo "<form action='form.html'><button>voltar</button></form>";   
