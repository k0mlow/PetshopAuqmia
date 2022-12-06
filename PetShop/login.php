<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(60deg, #00bac6, #cba77f);
        }

        div {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .butaum {
            background-color: #cba77f;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;

        }

        .butaum:hover {
            background-color: #00bac6;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <a href="home.php">voltar</a>
    <div>
        <form action="testLogin.php" method="POST">
            <h1>Login</h1>
            <form action="" method="POST">
                <input type="text" name="email" placeholder="Email">
                <br><br>
                <input type="password" name="senha" placeholder="Senha">
                <br><br>
                <input class="butaum" type="submit" name="submit" value="enviar">
    </div>
</body>

</html>