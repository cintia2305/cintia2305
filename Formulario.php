<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style> {
    backgroundcolor: 
}

<body>
 <h2>Formulário Outubro Rosa 🌺</h2>

<form action ="Formulario.php" method="post">
<label>Nome:</label><br>
<input type="text" name="nome" required><br><br> 
<label>E-mail:</label><br>
<input type="email" name="email" required><br><br>
<label> Idade:<label><br>
<input type="idade" name="idade" required><br><br>
<label>Já realizou o exame de mamografia este ano?</label><br>
<input type="radio" name="mamografia" value="Sim" required> Sim<br>
<input type="radio" name="mamografia" value="Não"> Não<br><br>
<input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $nome = $_POST["nome"];
    $mamografia = $_POST["mamografia"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    echo "<h3>🌺Dados Recebidos(POST)</h3>";
    echo "Nome: $nome <br>";
    echo " Fez mamografia: $mamografia";
    echo "E-mail: $email <br>";
    echo "Idade: $idade <br>";
}
?>

 <style>   
</body>


</html>
</body>



</html>
