

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "home_service");

if (mysqli_connect_errno()) {
    die("Error in connection");
}



$service_type =$_POST['service_type'];
$query = mysqli_query($conn,"SELECT * FROM booking WHERE service_type = '$service_type' AND `status`='pending'");
// $data=mysqli_fetch_assoc($query);
$myarray = array();
if($query)
{
    while ($data = mysqli_fetch_assoc($query)) {
        $myarray['data'][] = $data; // Store each fetched row as an array within 'data'
    }
}
else
{
    $myarray['message'] = 'failed';
}
echo json_encode($myarray);
?>


