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
    <section class="paylist">
        <h3 class="heading">Lista de reprodução de música</h3>
        <div class="box-container">
            <?php
                $select_songs = $conn->prepare("SELECT * FROM `songs`");
                $select_songs->execute();
                if($select_songs->rowCount() > 0){
                    while($fetch_songs = $select_songs->fetch(PDO::FETCH_ASSOC)){
                        
                    }
                }
            ?>
            <div class="box">
                <a href="uplaod_music.php" class="btn">Fazer upload de música</a>
            </div>
        </div>
    </section>


<!-- custom js file link -->
<script src="java/java.js"></script>
</body>
</html>
