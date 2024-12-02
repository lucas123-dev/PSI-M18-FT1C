<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method = "post" action="">
            <label for="email">Endereço de email:</label><br>
            <input type="text" id="email" name="email"><br>
            <input type="submit" value="Submit">
        </form>
        <?php
        $email= $_POST['email'];;
        echo "email introduzido: $email <br>";
        $at_position = strpos($email, "@");
        $user = substr($email,0,$at_position);
        $domain = substr($email,$at_position+1);
        echo "username: $user <br>";
        echo "domínio: $domain";
        ?>
    </body>
</html>