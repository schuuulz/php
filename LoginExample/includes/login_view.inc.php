<?php 
declare(strict_types=1);


function check_login_errors() {
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        echo '<br>';

        foreach ($errors as $error) {
            echo '<div class="alert alert-warning" role="alert">'. $error .'</div>';
        }

        unset($_SESSION["errors_login"]);
    }
    else if (isset($_GET['login']) && $_GET['login'] === 'success'){
        echo '<div class="alert alert-success" role="alert">Login Success!</div>';
    }
}
