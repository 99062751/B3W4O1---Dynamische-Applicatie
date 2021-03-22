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
            <img class="avatar" src="resources/images/<?php echo $result3["avatar"];?>">
            <div class="stats" style="background-color: <?php echo $result3["color"];?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><?php echo $result3["health"];?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?php echo $result3["attack"];?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?php echo $result3["defense"];?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?php echo $result3["weapon"]; ?></li>
                    <li><b>Armor</b>: <?php  echo $result3["armor"];?></li>
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
<footer>&copy; [Sumant Jakhari] 2021</footer>
</body>
</html>