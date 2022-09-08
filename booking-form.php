<?php

$connection =  mysqli_connect('localhost','root','','booking');
if(!$connection)
{
die("Connection failed" .mysqli_connect_error());
}

if(isset($_POST['submit'])){
    echo "<script>
            alert('Booking done successfully');
            </script>";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cno = $_POST['number'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    $sql= "insert into book_form (name, email, phone, address, location, guests, arrival, departure)
    values('$name', '$email', '$cno', '$address', '$location', '$guests', '$checkin', '$checkout')";

    if (mysqli_query($connection,$sql)){
        echo "Booking done successfully";
    }
    

    else {
        echo 'Try again' .mysqli_error($connection);

    }
}

?>