<?php  
    function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $dbname = "B3W4O1__forChar";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }    
   

    //Alle data ophalen gesorteerd bij name uit characters
    function AllData(){
        global $result;
        $conn= connect();

        $stmt = $conn->prepare("SELECT * FROM characters ORDER BY name");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $conn = null;
    }

    //Alle resultaten tellen
    function CountData(){
        global $result2;
        $conn= connect();

        $stmt = $conn->prepare("SELECT COUNT(*) AS number FROM characters");
        $stmt->execute();
        $result2 = $stmt->fetch(PDO::FETCH_ASSOC);

        $conn = null;
    }

    //Resultaat ophalen uit database met zelfde id als $id
    function Connect_iD_toBase(){
        global $result3;
        $conn= connect();
        $id= $_GET["id"];
        $stmt = $conn->prepare("SELECT * FROM characters WHERE id=?");
        $stmt->execute([$id]);
        $result3 = $stmt->fetch(PDO::FETCH_ASSOC);
        $conn = null;
    }
    
    
    AllData();
    CountData();   
    Connect_iD_toBase(); 
?>