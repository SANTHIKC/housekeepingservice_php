

<?php
session_start();
 $conn = mysqli_connect("localhost", "root", "", "home_service");

if (mysqli_connect_errno()) {
    die("Error in connection");
}


$emp_id =$_POST['emp_id'];

$query = mysqli_query($conn,"SELECT * FROM employee_reg WHERE emp_id = '$emp_id'");
$data=mysqli_fetch_assoc($query);
if($data)
{
     
     $myarray['data'] =$data;
}
else
{
    $myarray['message'] = 'failed';
}
echo json_encode($myarray);
?>




 