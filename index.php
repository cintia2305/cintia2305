<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -
   <?php
   $nome ="Calculos Bancarios";
   $numero1 = 200; 
   $numero2 = 333;
   $soma = $numero1 + $numero2;
   $subtração = $numero1 - $numero2;
   $multiplicação = $numero1 * $numero2;
   $divisão = $numero1 / $numero2;
   echo "Resultado da soma: $soma<br>";
   echo"Resultado da subtração: $subtração<br>";
   echo"Resultado da mutltiplicação: $multiplicaação<br>";
   echo"Resultado da divisão: $divisão<br>";
   if($soma > 2){
    echo"o resultado da soma é maior que 2.<br>";
   }elseif($soma == 2){
    echo"o resultado da divisão é igual exatamente 2.<br";
}
   else {
    echo"o resultado da divisão é menor que 2.<br>";
}
   ?>

</body>
</html>
