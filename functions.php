<?php 
    function load_page(){
        isset($_GET['p']) ? require_once("./pages/".$_GET['p'].".php") : require_once('./pages/notfound.php');
    };

    $pdo = new PDO("mysql:host=127.0.0.1:3308; dbname=aula-database","root","");
    
    /*
    // INSERT INTO - MySQL
    
    $array = array("Fulano", "88888888812", "USER", "2022-09-05 20:30:00");

    $sql = $pdo -> prepare("INSERT INTO pessoas VALUES(null, ?, ?, ?, ?)");

    $sql -> execute(array_values($array)); */

    //SELECT FROM - MySQL

    $sql = $pdo -> prepare("SELECT * FROM PESSOAS");
    $sql -> execute();
    $fetchPessoas = $sql -> fetchall();

    foreach($fetchPessoas as $key => $pessoa){
        echo "Id:".$pessoa["id"]."<br>";
        echo "Nome:".$pessoa["nome"]."<br>";
        echo "Document:".$pessoa["document"]."<br>";
        echo "Type:".$pessoa["type"]."<br>";
        echo "<hr>";
    };
?>