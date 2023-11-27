

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "home_service");

if (mysqli_connect_errno()) {
    die("Error in connection");
}


$booking_id=$_POST['booking_id'];


$query = mysqli_query($conn,"SELECT booking.booking_id,booking.service_type,booking.date,booking_approve.emp_id,booking.status, FROM booking JOIN booking_approve ON booking.booking_id=booking_approve.booking_id JOIN employee_reg on booking_approve.emp_id= employee_reg.emp_id WHERE booking.status='approve' AND booking.user_id = '$user_id' ");

if($query)
{
     $myarray['data'] =$data ;
}
else
{
    $myarray['message'] = 'failed';
}
echo json_encode($myarray);
?>


