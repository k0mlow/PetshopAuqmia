 <?php
    session_start();
    include_once('config.php');

    //incluir conexao

    //print_r($_SESSION);

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM pet WHERE emaildono = '$logado'";

    $result = $conexao->query($sql);
    ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <title>SISTEMA | GN</title>
     <style>
         body {
             font-family: Arial, Helvetica, sans-serif;
             background-image: linear-gradient(60deg, #00bac6, #cba77f);
             text-align: center;
         }

         .table-bg {
             background: rgba(0, 0, 0, 0.6);
         }
     </style>
 </head>

 <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
         <div class="container-fluid">
             <a class="navbar-brand" href="#">MEUS PETS</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
         </div>
         <div class="d-flex">
             <a href="sair.php" class="btn btn-danger me-4">Sair</a>
         </div>
     </nav>
     <br>
     <br>

     <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
        ?>

     <div class="m-5">
         <table class="table text-white table-bg">
             <thead>
                 <tr>
                     <th scope="col">Nome</th>
                     <th scope="col">Especie</th>
                     <th scope="col">Ra??a</th>
                     <th scope="col">Sexo</th>
                     <th scope="col">Data de Nascimento</th>
                     <th scope="col">Data da Proxima Vacina</th>
                 </tr>
             </thead>
             <tbody>
                 <?php
                    while ($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['nomepet'] . "</td>";
                        echo "<td>" . $user_data['especie'] . "</td>";
                        echo "<td>" . $user_data['ra??a'] . "</td>";
                        echo "<td>" . $user_data['sexopet'] . "</td>";
                        echo "<td>" . $user_data['nascpet'] . "</td>";
                        echo "<td>" . $user_data['proxvax'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
             </tbody>
         </table>
     </div>

     <div>
        <h1></h1>
     </div>
 </body>


 </html>