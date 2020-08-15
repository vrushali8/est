<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}
else {
    echo "No connection";
}
mysqli_select_db($con, 'reshuffle');

$name = $_POST['name'];
$email = $_POST['email'];
$concern = $_POST['concern'];

$qurey = "insert into userinfodata (name,email,concern)
values ('$name', '$email', '$concern')";

mysqli_query($con,$qurey );

header('location:contact.php');
?>