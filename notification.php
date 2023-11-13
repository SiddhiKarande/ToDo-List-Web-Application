
<?php

/* ====================================================== */
/* Database connection function */
/* ====================================================== */
function dbConnect()
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "todo_list";

    $conn = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed.");
    return $conn;
}

$conn = dbConnect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notifications</title>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h1{
    text-align: center;
}


    </style>
</head>
<body>
    <h1>Tasks to complete</h1>
    <h1>Notifications Tab To other device</h1>
    

  
  
</table>
<script>

// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('26a666c33eeafebc5a8d', {
  cluster: 'ap2'
});

var channel = pusher.subscribe('ToDoList');
channel.bind('add_todo', function(data) {
 // console.log(data);

// alert(JSON.stringify(data));
alert("Your task is added! check due date and time:)Check your home page");
 
 
 /*
 var t = data['message']['title'];
  var de = data['message']['desc'];
  var d = data['message']['date'];
  var ti = data['message']['time'];
  
  var tr;
  tr +='<tr>';
  tr +='<td>';
  tr +=t;
  tr +='</td>';
  tr +='<td>';
  tr +=de;
  tr +='</td>';
  tr +='<td>';
  tr +=d;
  tr +='</td>';
  tr +='<td>';
  tr +=ti;
  tr +='</td>';
  tr +='</tr>';

  $('#add_todos').append(tr);
  */
});
</script>
</body>
</html>