<?php

// PHP Data Objects(PDO) Sample Code:
try {
    $connection = new PDO("sqlsrv:server = tcp:travel-booking-server.database.windows.net,1433; Database = travel-booking-db", "booking-admin", "Anisham733@123");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "booking-admin", "pwd" => "Anisham733@123", "Database" => "travel-booking-db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:travel-booking-server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(isset($_POST['submit'])){
//     echo "<script>
//             alert('Booking done successfully');
//             alert(
//             </script>";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cno = $_POST['number'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    $sql= "insert into book_form1 (name, email, phone, address, location, guests, arrival, departure)
    values('$name', '$email', '$cno', '$address', '$location', $guests, '$checkin', '$checkout')";

    if (mysqli_query($connection,$sql)){
        echo  "<script> alert("Booking done successfully");</script>
        echo $conn;
        echo mysqli_query($connection,$sql);
    }
    

    else {
        echo 'Try again' .mysqli_error($connection);

    }
}

?>
