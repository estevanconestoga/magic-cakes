<?php
$server = '127.0.0.1:3306';
$user = 'root';
$password = '';
$db = 'magiccake';

$connection = mysqli_connect($server, $user, $password, $db);

if(isset($_POST['submit'])) {
    if(!empty($_POST['email'])) {
        $email = $_POST['email'];

        $query = "INSERT INTO newsletter (email) VALUES ('$email')";

        $run = mysqli_query($connection,$query) or die(mysqli_error());

    if($run) {
        echo "Form submitted successfully";
    } else {
        echo "Form not submitted. Try again Later.";
    }
    } else {
        echo "required field";
    }
}
