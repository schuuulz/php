<?php
require_once "includes/config_session.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/login_view.inc.php";
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login System!</title>
</head>

<body>
    <div class="msg">
        <?php
        check_login_errors();
        check_signup_errors();
        ?>
    </div>
    <div class="divLogin">
        <h3 class="textLogin">Login System</h3>

        <div id="form1">
            <form action="includes/login.inc.php" method="POST">
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Login</button>
            </form>
        </div>


        <div id="form2">
            <form action="includes/signup.inc.php" method="POST">
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="pwd" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" name="email" class="form-control" placeholder="E-mail">
                </div>
                <button type="submit" class="btn btn-primary mt-2">SignUp</button>
            </form>
        </div>
        <div class="inline">
            <span>Check to SignUp :
                <input type="checkbox" id="signUpForm">
            </span>
        </div>
    </div>
    <script src="js/index.js">
    </script>
</body>

</html>