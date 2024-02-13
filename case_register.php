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

    <link rel="stylesheet" href="case_register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Ecourt Login</title>
</head>

<body>

    <body>
        <div class="login-page">
            <?php
            $pid = $_SESSION['id'];
            if (isset($_POST["submit"])) {
                $court_type = $_POST["S_HCourt"];
                $email = $_POST["email"];
                $case_type = $_POST["case_type"];
                $name = $_POST["name"];
                $case_description = $_POST["case_description"];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $country = $_POST['country'];
                $postal_code = (int)$_POST['postal_code'];
                // print_r($type_court);
                // print_r($case_type);
                // print_r($name);
                // print_r($case_description);
                // print_r($address);
                // print_r($city);
                // print_r($state);
                // print_r($country);
                // print_r($postal_code);

                $errors = array();
                if (empty($court_type) or empty($email) or empty($case_type) or empty($name) or empty($case_description) or empty($address) or empty($city) or empty($state) or empty($country) or empty($postal_code)) {
                    array_push($errors, "All Fields are required to be filled");
                }
                if (is_int($postal_code) != true) {
                    array_push($errors, "Enter valid postal code");
                }
                if (strtolower($pid) != strtolower($email)) {
                    array_push($errors, "Enter your email same as email logged In");
                }
                require_once 'config.php';
                // $sql = "SELECT * FROM users WHERE email = '$email'";
                // $result = mysqli_query($link, $sql);
                // $rowcount = mysqli_num_rows($result);
                // if ($rowcount > 0) {
                //     array_push($errors, "Email already Exists!!");
                // }

                if (count($errors) > 0) {
                    foreach ($errors as $error) {
                        echo "<div class='alert alert-danger'>";
                        print_r($error);
                        echo "</div>";
                    }
                } else {
                    $sql = "INSERT INTO cases (court_type, case_type, name, email, case_description, address, city, state, country, postal_code) VALUES ( ? , ? ,?, ?, ?, ? , ? , ?, ?, ?)";
                    $stmt = mysqli_stmt_init($link);
                    $prep = mysqli_stmt_prepare($stmt, $sql);
                    if ($prep === true) {
                        mysqli_stmt_bind_param($stmt, "sssssssssi", $court_type, $case_type, $name, $email, $case_description, $address, $city, $state, $country, $postal_code);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success'>Your case Registered Successfully</div>";
                    }
                }
            }
            ?>
            <div class="form">
                <div class="login">
                    <div class="login-header">
                        <h3>File a Case</h3>
                        <p>Please enter required information to register a case</p>
                    </div>
                </div>
                <form class="login-form" action="case_register.php" method="post">
                    <input type="radio" id="supreme-court" name="S_HCourt" value="Supreme Court">
                    <label for="Supreme-court">Supreme Court</label>
                    <input type="radio" id="high-court" name="S_HCourt" value="High Court">
                    <label for="high-court">High Court</label>
                    <input type="radio" id="district-court" name="S_HCourt" value="District Court">
                    <label for="District-court">District Court</label>
                    <select name="case_type" id="user">
                        <option value="Criminal">Criminal</option>
                        <option value="Civil">Civil</option>
                        <option value="Family Matter">Family Matter</option>
                        <option value="Land">Land</option>
                        <option value="Charity Trust">Charity Trust</option>
                        <option value="SEBI">SEBI</option>
                        <option value="Other">Other</option>
                    </select>
                    <input type="text" name="name" style="width: 95%;" placeholder="Name of applicant" />
                    <input type="text" name="email" style="width: 95%;" placeholder="Email" />
                    <textarea rows="4" cols="50" id="Case_description" name="case_description">Case Description</textarea>
                    <input type="text" name="address" placeholder="Address" />
                    <input type="text" name="city" placeholder="City" />
                    <input type="text" name="state" placeholder="State" />
                    <input type="text" name="country" placeholder="Country" />
                    <input type="text" name="postal_code" placeholder="Postal code" />
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
</body>

</html>