<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
require_once("config.php");
$query = "select case_id,court_type,case_type,case_description,created_at from cases";
$result = mysqli_query($link, $query);
?>

<html lang="en">

<head>
    <title>Ecourt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        if (window == window.top) {
            window.location.replace("dashboard.php");
        }
    </script>
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered" style="text-align: center;">
                        <tr class="bg-dark text-white" style="text-align: center;">
                            <td> Court Type </td>
                            <td> Case Type</td>
                            <td> Case Description </td>
                            <td> Created at </td>
                            <td>Edit</td>
                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <td><?php echo $row["court_type"] ?></td>
                                <td><?php echo $row["case_type"] ?></td>
                                <td><?php echo $row["case_description"] ?></td>
                                <td><?php echo $row["created_at"] ?></td>
                                <td>
                                    <a href="delete.php/*?id=<?php echo $row["case_id"] ?>" class="btn btn-danger">Delete</a>
                                </td>
                        </tr>
                    <?php
                            }
                    ?>

                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>