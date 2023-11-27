

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "home_service");

if (mysqli_connect_errno()) {
    die("Error in connection");
}


$booking_id=$_POST['booking_id'];


$query = mysqli_query($conn,"SELECT * FROM booking WHERE booking_id = '$booking_id' AND emp_id= '$emp_id' ");
$data=mysqli_fetch_assoc($query);
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


