<?php
session_start();
$pid = $_SESSION['id'];
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>

    <script>
        if (window == window.top) {
            window.location.replace("dashboard.php");
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="password.css">
    <title>Ecourt password</title>
</head>

<body>

    <body>
        <div class="login-page">
            <?php
            if (isset($_POST["chn_pas"])) {
                $cur_pas = $_POST["cur_pas"];
                $new_pas = $_POST["new_pas"];
                $cnr_new_pas = $_POST["cnr_new_pas"];
                require_once('config.php');
                $sql = "SELECT * FROM users WHERE email = '$pid'";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                $errors = array();
                if (empty($cur_pas) or empty($new_pas) or empty($cnr_new_pas)) {
                    array_push($errors, "All Fields are required to be filled");
                }
                if ($cur_pas != $row["password"]) {
                    array_push($errors, "Current Password does not match to account password");
                }
                if (strlen($new_pas) < 8) {
                    array_push($errors, "Password must be atleast 8 characters long");
                }
                if ($cnr_new_pas !== $new_pas) {
                    array_push($errors, "Password does not match");
                }


                if (count($errors) > 0) {
                    foreach ($errors as $error) {
                        echo "<div class='alert alert-danger'>";
                        print_r($error);
                        echo "</div>";
                    }
                } else {
                    $sql = "UPDATE users SET password = '$new_pas' WHERE email = '$pid'";
                    $result = mysqli_query($link, $sql);
                    if ($result == true) {
                        echo "<div class='alert alert-success'>password changed Successfully</div>";
                    }
                }
            }
            ?>
            <div class="form">
                <div class="login">
                    <div class="login-header">
                        <h3>Change Password</h3>
                        <p>Please enter your credentials to Change Password.</p>
                    </div>
                </div>
                <form class="login-form" action="password.php" method="post">
                    <input type="text" name="cur_pas" placeholder="Current Password" />
                    <input type="password" name="new_pas" placeholder="New Password" />
                    <input type="password" name="cnr_new_pas" placeholder="Confirm New Password" />
                    <button type="submit" name="chn_pas">Change Password</button>
                </form>
            </div>
        </div>
    </body>
</body>

</html>