<?php
header('Content-Type: text/html; charset=utf-8');
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
            <p>Nome da música <span>*</span> </p>
            <input type="text" class="box" name="name" placeholder="Digite o nome da música" required maxlength="100">
            <p>Nome do artista</p>
            <input type="text" class="box" name="artist" placeholder="Digite o nome da artista" required maxlength="100">
            <p>Selecione a música<span>*</span></p>
            <input type="file" name="music" id="" class="box" required accept="audio/*">
            <p>Selecione album</p>
            <input type="file" name="album" id="" class="box" required accept="image/*">
            <input type="submit" value="Fazer upload de música" class="btn">
            <a href="index.php" class="option-btn">Voltar</a>
        </form>
    </section>
</body>
</html>