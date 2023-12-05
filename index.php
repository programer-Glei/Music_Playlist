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
    <section class="paylist">
        <h3 class="heading">Lista de reprodução de música</h3>
        <div class="box-container">
            <?php
                $select_songs = $conn->prepare("SELECT * FROM `songs`");
                $select_songs->execute();
                if($select_songs->rowCount() > 0){
                    while($fetch_songs = $select_songs->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="box">
                <?php if($fetch_songs['album'] != ''){?>
                    <img src="uploaded_album/<?= $fetch_songs['album']; ?>" alt="" class="album">
                <?php }else{?>
                    <img src="images/disc.png" alt="" class="album">
                <?php } ?>
                <div class="name"><?= $fetch_songs['name']; ?></div>
                <div class="artist"><?= $fetch_songs['artist']; ?></div>
                <div class="flex">
                    <div class="play" data-src="uplaoded_music/<?= $fetch_songs['music']; ?>"><i class="fas fa-play"></i><span>Play</span></div>
                    <a href="uplaoded_music/<?= $fetch_songs['music']; ?>" download><i class="fas fa-download"></i><span>Download</span></a>
                </div>
            </div>
            <?php
                 }
                }
            ?>
            <div class="box more-btn">
                <a href="uplaod_music.php" class="btn">Fazer upload de música</a>
            </div>
        </div>
    </section>

    <div class="music-player">
        <i class="fas fa-times" id="close"></i>
        <div class="box">
            <img src="" alt="" class="album">
            <div class="name"></div>
            <div class="artist"></div>
            <audio src="" class="music" controls></audio>
        </div>
    </div>


<!-- custom js file link -->
<script src="java/java.js"></script>
</body>
</html>
