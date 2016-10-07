<?php

/*
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];


$from="From: $name<$email>\r\nReturn-path: $email";
$subject="I want to say Hello!";


if (mail("andrewsmith96@hotmail.co.uk", $subject, $message, $from)){
    echo "Mail sent successfully!";

} else {
    echo "Mail not sent!";
    print_r(error_get_last());
}*/

date_default_timezone_set('Europe/London');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$datetime = date('m/d/Y h:i:s a', time());

$conn = new mysqli("eu-cdbr-azure-north-e.cloudapp.net", "bfea97edc87032", "4a3a9aaf", "contactmeportfolio");

$message = mysqli_real_escape_string($conn, $message);


if($conn->connect_error){
    die("Error:" . $conn->connect_error);
}

$SQL = "INSERT INTO contact_me(name, email, message, dateofcontact) VALUES('$name', '$email', '$message', '$datetime')";

if($conn->query($SQL) === TRUE){
    echo "Thanks for contacting me! I'll get back to you shortly!";
} else{
    echo "Error". $conn->error;
}

$conn->close();




?>
