<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
    </head>
    <body>
        <?php
        $passwordd="1234567890qwertyuiplkjhgfdsazxcvbnm";
        $newpassword =str_shuffle ($passwordd);
        $password=substr($newpassword, 0,8);
        echo "Password gerada: $password <br>";
        ?>
    </body>
    </html>