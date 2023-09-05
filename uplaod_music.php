<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/estilo.css">
    <title>Upload Music</title>
</head>
<body>
    <section class="form-container">
        <h3 class="heading">Fazer upload de música</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" class="box" name="name" placeholder="Digite o nome da música" required maxlength="100">
        </form>
    </section>
</body>
</html>