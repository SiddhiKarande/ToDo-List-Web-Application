


<?php

include('vendor/autoload.php');

$title= $_POST['title'];
$desc = $_POST['desc'];
$date = $_POST['date'];
$time= $_POST['title'];

$app_id = '1516159';
$app_key = '26a666c33eeafebc5a8d';
$app_secret = 'a0e4835cc5fe9b0943d2';
$app_cluster = 'ap2';

$pusher = new Pusher\Pusher($app_key, $app_secret, $app_id, ['cluster' => $app_cluster]);

$data['message'] = array(
    'title' => $title,
    'desc' => $desc,
    'date' => $date,
    'time' => $time

);

$pusher->trigger('ToDoList', 'add_todo', $data);
echo'<h1>Todo Added</h1>';


?>