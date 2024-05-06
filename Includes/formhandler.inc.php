<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];

    try{
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username,pass,email) values(?,?,?);" ;
       $stmt = $pdo->prepare($query);

        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $pass);
        $stmt->bindParam(3, $email);

        $stmt->execute();

        $pdo == null;
        $stmt = null;

        die(header("Location: ../index.php " ));
    } catch(PDOException $e){
        die("An error occurred :". $e-> getMessage());
    }
    
}else{
    header("Location: ../index.php " );
}
