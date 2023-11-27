<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "home_service");

if (mysqli_connect_error()) {
    die("Error in connection");
}

$emp_id = $_POST['emp_id']; 
$booking_id = $_POST['booking_id'];

$query=mysqli_query($conn,"UPDATE booking set `status` = 'approve' WHERE booking_id='$booking_id' ");
$query1=mysqli_query($conn,"INSERT INTO `booking_approve`( `booking_id`, `emp_id`, `status`) VALUES ('$booking_id','$emp_id','pending')");

$joinquery1 =mysqli_query($conn,"SELECT employee_reg.name, booking.booking_id, booking.servicetype, booking.date,booking.status
FROM employee_reg
RIGHT JOIN booking
ON employee_reg.booking_id = booking.booking_id
ORDER BY employee_reg.emp_id;");

if($query && $query1)
{
    $select_query = mysqli_query($conn, "SELECT * FROM booking WHERE booking_id='$booking_id'");
    
    if ($select_query && mysqli_num_rows($select_query) > 0) {
        $data = mysqli_fetch_assoc($select_query);
        $myarray['data'] = $data;
    } else {
        $myarray['message'] = 'No data found for the updated booking';
    }
}
else
{
    $myarray['message'] = 'failed';
}
echo json_encode($myarray);
?>