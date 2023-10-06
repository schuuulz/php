<?php 
declare(strict_types=1);

function check_signup_errors(){
    if (isset($_SESSION["errors_signup"])) {

        $errors = $_SESSION["errors_signup"];
        unset($_SESSION["errors_signup"]);
        echo "<br>";
        
        foreach ($errors as $error) {
            echo '<div class="alert alert-warning" role="alert">' . $error . '</div>';
        }
        
    } else if(isset($_GET["signup"]) && $_GET["signup"] === "success" ){
        echo "<br>";
        echo '<div class="alert alert-success" role="alert"> SignUp Success! </div >';
    }
}

