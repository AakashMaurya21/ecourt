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
            if (isset($_POST["submit"])) {
                $email = $_POST["email"];
                $name = $_POST["name"];
                $password = $_POST["password"];
                $confirm_password = $_POST["confirm_password"];
                $errors = array();
                if (empty($email) or empty($name) or empty($password) or empty($confirm_password)) {
                    array_push($errors, "All Fields are required to be filled");
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, "Enter valid email");
                }
                if (strlen($password) < 8) {
                    array_push($errors, "Password must be atleast 8 characters long");
                }
                if ($password !== $confirm_password) {
                    array_push($errors, "Password does not match");
                }

                require_once 'config.php';
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($link, $sql);
                $rowcount = mysqli_num_rows($result);
                if ($rowcount > 0) {
                    array_push($errors, "Email already Exists!!");
                }

                if (count($errors) > 0) {
                    foreach ($errors as $error) {
                        echo "<div class='alert alert-danger'>";
                        print_r($error);
                        echo "</div>";
                    }
                } else {
                    $sql = "INSERT INTO users (email, name, password) VALUES ( ? , ? , ?)";
                    $stmt = mysqli_stmt_init($link);
                    $prep = mysqli_stmt_prepare($stmt, $sql);
                    if ($prep === true) {
                        mysqli_stmt_bind_param($stmt, "sss", $email, $name, $password);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success'>You are Registered Successfully</div>";
                    }
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
                <form class="login-form" action="signup.php" method="post">
                    <input type="text" name="email" placeholder="Email" />
                    <input type="text" name="name" placeholder="Name" />
                    <input type="password" name="password" placeholder="Password" />
                    <input type="password" name="confirm_password" placeholder="Confirm Password" />
                    <button type="submit" name="submit">Register</button>
                    <p class="message">Already Registered? <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
    </body>
</body>

</html>