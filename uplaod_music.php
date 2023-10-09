<?php
header('Content-Type: text/html; charset=utf-8');
include 'connect.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $artist = $_POST['artist'];

    if(!isset($artist)){

        $artist = '';
    }

    $album = $_FILES['album']['name'];
    $album = filter_var($album, FILTER_SANITIZE_STRING);
    $album_size = $_FILES['album']['size'];
    $album_tmp_name = $_FILES['album']['tmp_name'];
    $album_folder = 'uploaded_album'.$album;

    if(isset($album)){
        if($album_size > 2000000){
            $message[] = 'O tamanho do álbum é muito grande!';
        }else{
            move_uploaded_file($album_tmp_name, $album_folder);
        }
    }else{
        $album = '';
    }

    $music = $_FILES['music']['name'];
    $music = filter_var($music, FILTER_SANITIZE_STRING);
    $music_size = $_FILES['music']['size'];
    $music_tmp_name = $_FILES['music']['tmp_name'];
    $music_folder = 'uplaoded_music'.$music;

    if($music_size > 100000000){
        $message[] = 'O tamanho da música é muito grande!';
    }else{
        $upload_music = $conn->prepare("INSERT INTO `songs`(name, artist, album, music) VALUES(?,?,?,?)");
        $upload_music->execute([$name, $artist, $album, $music]);
        move_uploaded_file($music_tmp_name, $music_folder);
        $message[] = 'Nova musica adicionada!';
    }
}

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
            <input type="submit" value="Fazer upload de música" class="btn" name="submit">
            <a href="index.php" class="option-btn">Voltar</a>
        </form>
    </section>
</body>
</html>