<?php require_once('Connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <style>
    body {font-family: Arial Black, Helvetica;
        }
        form 
        
            * {box-sizing: border-box;}
            
            .container{
                padding: 20px;
            }

            input[type=text], input[type=surname], input[type=email], input[type=password]{
                height: 45px;
                width: 100%;
                outline: none;
                font-size: 16px;
                border-radius: 5px;
                padding-left: 15px;
                border: 1px solid #ccc;
                border-bottom-width: 2px;
                transition: all 0.3s ease;
               
            }

            input[type=submit]{
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
    </style>
</head>

<body>
    <form action="register_script1.php" method="POST">
        <label for="name">Meno: </label>
        <input type="text" id="name" name="username">
        <br>
        <label for="surname">Priezvisko: </label>
        <input type="surname" id="surname" name="surname">
        <br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">Heslo: </label>
        <input type="password" id="password" name="password">
        <br>
        <label for="passwordVerify">Zopakujte heslo: </label>
        <input type="password" id="passwordVerify" name="passwordVerify">
        <br>
        <input type="submit" value="Registracia">
    </form>
</body>
</html>