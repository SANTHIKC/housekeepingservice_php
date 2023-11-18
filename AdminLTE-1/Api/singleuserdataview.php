

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "home_service");

if (mysqli_connect_errno()) {
    die("Error in connection");
}


$user_id =$_POST['user_id'];
$query = mysqli_query($conn,"SELECT * FROM user_reg WHERE user_id = '$user_id' ");
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


