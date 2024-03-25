<?php
session_start();
include "db_connect.php";

if(isset($_POST['send']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $service = $_POST['service'];

    $request = "insert into book_form(name, email, phone, date, service) values('$name', '$email', '$phone', '$date', '$service')";

    mysqli_query($connection, $request);

    header('location:book.php');

}
else
{
    header('Location: home.php');
    exit();
}

?>