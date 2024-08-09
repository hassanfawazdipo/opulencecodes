<?php
include('connection.php');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $regdate = Date('Y-m-d h:m:i');

    $query = "INSERT INTO contact(name,email,subject,message,regdate)VALUES('$name','$email','$subject','$message','$regdate')";
    $result = mysqli_query($conn, $query);

    header('location: index.php');
}
?>