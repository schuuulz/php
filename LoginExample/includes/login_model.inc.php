<?php 
declare(strict_types=1);

// manipualte database

function getUser( object $pdo, string $username) {
    $query = "SELECT * FROM admins WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username",$username);
    $stmt->execute();
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

}