<?php
include_once 'connection_database.php';
$stmt = $conn->prepare("SELECT * FROM characters");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);
if(isset($_GET["page"])){
	$index= ($_GET["page"] - 1);	
} else {
	$index= 0;	
}
$value= $result[$index];
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
<?php
    foreach ($result as $array) {
        '<a href="index.php?page='.$array["id"]. $i++.'">'.$array["name"].'</a>';
        $i= count($array);
    } 
?>



<h1>Alle [<?php echo $i ?>] characters uit de database

</h1>

</header>
<div id="container">
    <?php
    $stmt_img = $conn->prepare("SELECT avatar FROM characters");
    $stmt_img->execute();


        for($b= 0; $b < count($array); $b++){
            echo ('<a class="item" href="character.php">
                <div class="left">
                    <img class="avatar" src="resources/images/bowser.jpg">
                </div>
                <div class="right">
                    <h2>Bowser</h2>
                    <div class="stats">
                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-heart"></i></span> 10000</li>
                            <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> 400</li>
                            <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> 100</li>
                        </ul>
                    </div>
                </div>
                <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
            </a>');
        }
        ?>
</div>
<footer>&copy; [jenaam] 2020</footer>
</body>
</html>


