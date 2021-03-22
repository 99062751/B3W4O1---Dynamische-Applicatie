<?php
include_once 'connection_database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header>
<h1>Alle <?php echo $result2["number"]; ?> characters uit de database</h1>
</header>
<div id="container">
    <?php

        foreach ($result as $array => $name) {
            echo '<a class="item" href="character.php?id='.$name["id"].'">
                <div class="left">
                    <img class="avatar" src="resources/images/'.$name["avatar"].'">
                </div>
                <div class="right">
                    <h2>'.$name["name"].'</h2>
                    <div class="stats">
                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-heart"></i></span>'.$name["health"].'</li>
                            <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> '.$name["attack"].'</li>
                            <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> '.$name["defense"].'</li>
                        </ul>
                    </div>
                </div>
                <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
            </a>';
        }
        ?>
</div>
<footer>&copy; [Sumant Jakhari] 2021</footer>
</body>
</html>


