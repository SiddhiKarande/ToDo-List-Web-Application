

<?php
include "config.php";
session_start();
if (!isset($_SESSION["user_email"])) {
    header("Location: index.php");
    die();
}

?>




<!doctype html>
<html lang="en">

<head>
    <?php getHead(); ?>
    <style>
        .h1{
            color: white;
        }

    </style>
</head>

<body style="background:url(home1.png);background-size:100% 150%">
    <?php getHeader(); ?>
    <div class="container">
        <h1 class="mb-4 text-center fw-bold" style="color: white;">Your Todos</h1>
        <div class="row">
            <?php 
            // Get User Id based on user email
            $sql = "SELECT id FROM users WHERE email='{$_SESSION["user_email"]}'";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if ($count > 0) {
                $row = mysqli_fetch_assoc($res);
                $user_id = $row["id"];
            } else {
                $user_id = 0;
            }
            $sql1 = "SELECT * FROM todos WHERE user_id='{$user_id}' ORDER BY id DESC";
            $res1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($res1) > 0) {
                foreach ($res1 as $todo) {
            ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <?php getTodo($todo); ?>
            </div>
            <?php } } else { echo "<h1 class='text-danger text-center fw-bold'>Todos are not available!</h1>"; } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>
<?php

include('vendor/autoload.php');
/*
$title= $_POST['title'];
$desc = $_POST['desc'];
$date = $_POST['date'];
$time= $_POST['title'];
*/
$app_id = '1516159';
$app_key = '26a666c33eeafebc5a8d';
$app_secret = 'a0e4835cc5fe9b0943d2';
$app_cluster = 'ap2';

$pusher = new Pusher\Pusher($app_key, $app_secret, $app_id, ['cluster' => $app_cluster]);
/*
$data['message'] = array(
    'title' => $title,
    'desc' => $desc,
    'date' => $date,
    'time' => $time

);*/
$d = "TO DO IS ADDED";

$pusher->trigger('ToDoList', 'add_todo',$d);

?>