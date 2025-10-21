<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h2>Formulário Outubro Rosa 🌺</h2>

<form action="="Formulario.php" method="post">
<label>Nome:</label><br>
<input type="text" name="nome" required><br><br> 
<label>Já realizou o exame de mamografia este ano?</label><br>
<input type="radio" name="mamografia" value="Sim" required> Sim<br>
<input type="radio" name="mamografia" value="Não"> Não<br><br>
<input type="submit" value="Enviar">
</form>
<?php
if ($serve["REQUEST_METHOD"] == "POST"){ 
    $nome = $_POST["nome"];
    $mamografia = $_POST["mamografia"];

    echo "<h3>🌺Dados Recebidos(POST)</h3>";
    echo "Nome: $nome <br>";
    echo " Fez mamografia: $mamografia";
}
?>

    
</body>


</html>