<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <title>Ecourt Login</title>
</head>

<body>

    <body>
        <div class="login-page">
            <?php
            if (isset($_POST["login"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                require_once('config.php');
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($link, $sql);
                $rowcount = mysqli_num_rows($result);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if ($rowcount > 0) {
                    if ($password === $user["password"]) {
                        session_start();
                        $_SESSION["user"] = "yes";
                        header("Location: dashboard.php");
                        die();
                    } else {
                        echo "<div class='alert alert-danger'>Password does not match.</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'>Email does not exist.</div>";
                }
            }
            ?>
            <div class="form">
                <div class="login">
                    <div class="login-header">
                        <h3>LOGIN</h3>
                        <p>Please enter your credentials to login.</p>
                    </div>
                </div>
                <form class="login-form" action="login.php" method="post">
                    <input type="text" name="email" placeholder="Email/Username" />
                    <input type="password" name="password" placeholder="Password" />
                    <button type="submit" name="login">Login</button>
                    <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
                </form>
            </div>
        </div>
    </body>
</body>

</html>