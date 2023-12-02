<?php
session_start();
$conn=mysqli_connect("localhost","root","","home_service");
if(mysqli_connect_error())
{
    die("Error in connection");
}
$user_id=$_POST['user_id'];
$user_name =$_POST['user_name'];
$service_type=$_POST['service_type'];
$address =$_POST['address'];
$phone_number =$_POST['phone_number'];
$date=$_POST['date'];


// Insert data into the database
$sql = "INSERT INTO booking ( user_id,user_name, service_type,address,phone_number, date, status) VALUES ('$user_id', '$user_name', '$service_type','$address','$phone_number','$date', 'pending')";

if (mysqli_query($conn, $sql)) {
     $booking_id = mysqli_insert_id($conn);

   
        $query = mysqli_query($conn, "SELECT * FROM booking WHERE booking_id = '$booking_id' ");
        $data = mysqli_fetch_assoc($query);

        if ($query) {
            $myarray['data'] = $data;
        } else {
            $myarray['message'] = 'Failed to retrieve data';
        }
    
} else {
    $myarray['message'] = 'Error in inserting data into booking table: ' . mysqli_error($conn);
}



echo json_encode($myarray);


mysqli_close($conn);

?>
