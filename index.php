<?php 

// $jsontest = '{"music_id":4, "music_name":"Billie Jean", "genres": "Jazz, Pop, Country, Électro, Classique, Hip-Hop, Reggae, Metal, Blues, Rock"}';

// var_dump(json_decode($jsontest));

$string = file_get_contents("assets/music.json");
$json_music = json_decode($string, true);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musics</title>
    <link href="assets/style.css" rel="stylesheet">
</head>
<body>
    <section class="playlist">
        <?php foreach ($json_music as $element){?> 
        <div class="music-card">
            <div class="bubble-pop">
                <div class="music-bubble">
                        <div class="music-note">
                        <i class="fa-solid fa-music"></i>       
                    </div>
                </div>
            </div>
            <div class="music-play">
                <i class="fa-regular fa-circle-left"></i>
                <i class="fa-solid fa-circle-pause"></i>
                <i class="fa-regular fa-circle-right"></i>
            </div>
            <h2><?=$element['music_name']?></h2>
            <div class="music-genre">
            <?php 

            $genres = explode(", ", $element['genres']);
            
            foreach ($genres as $genre) { ?>
            
            <span><?=$genre?></span>
            
            <?php
            }
            ?>
            </div>
</div>
<?php }?>
</section>
<script src="https://kit.fontawesome.com/dd845416b8.js" crossorigin="anonymous"></script>
</body>
</html>