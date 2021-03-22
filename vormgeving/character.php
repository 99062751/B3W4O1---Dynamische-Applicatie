<?php
include_once 'connection_database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?php echo $name["name"];?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/bowser.jpg">
            <div class="stats" style="background-color: yellowgreen">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><?php echo $result3["health"];?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?php echo $result3["health"];?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?php echo $result3["health"];?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?php echo $id[`weapon`]; ?></li>
                    <li><b>Armor</b>: <?php  echo $id[`armor`];?></li>
                </ul>
            </div>
        </div>
       
        <div class="right">
            <p>
                <?php echo nl2br($result3["bio"], false);?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; [jenaam] 2020</footer>
</body>
</html>