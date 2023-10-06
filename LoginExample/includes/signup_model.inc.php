<?php 
declare(strict_types=1);


function getUsername(object $pdo,string $username)
{
    $query = "SELECT username FROM admins WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username",$username);
    $stmt->execute();
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getEmail(object $pdo,string $email)
{
    $query = "SELECT email FROM admins WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email",$email);
    $stmt->execute();
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function setUser(object $pdo,string $username, string $pwd, string $email)
{
    $query = "INSERT INTO admins(username, password, email) VALUES (:username, :pwd, :email);";
    $stmt = $pdo->prepare($query);
    
    $options = [
        'cost' => 12
    ];
    $hashedPwd = password_hash($pwd,PASSWORD_BCRYPT, $options);
    
    $stmt->bindParam(":username",$username);
    $stmt->bindParam(":pwd",$hashedPwd);
    $stmt->bindParam(":email",$email);
    $stmt->execute();
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
