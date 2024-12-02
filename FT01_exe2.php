<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercício 2 da Ficha 1</title>
        <link rel="stylesheet" href="">
</head>
<body>
    <h1>Exercício 2 da Ficha 1</h1>
    <form method = "post" action="">
        <label for="url">Endereço URL:</label><br>
        <input type="text" id="url" name="url"><br>
        <input type="submit" value="Submit">
</form>
<?php
$url= $_POST['url'];
echo "endereço URL introduzido: $url <br>";
$at_position = strrpos ($url, "/");
$domain = substr($url,$at_position+1);
echo "Domínio: $domain";
?>
</body>
</html>