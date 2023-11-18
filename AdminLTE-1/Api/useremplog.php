<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "home_service");

if (mysqli_connect_errno()) {
    die("Error in connection");
}



$email =$_POST['email'];
$password=$_POST['password'];   
    

$result = mysqli_query($conn, "SELECT log_id,email,password,type FROM login_emp_user WHERE email='$email' ");



if ($result) {
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    $type=$row['type'];
    
    if ($count == 1 &&  $type =='user' ) {
    
        $_SESSION['log_id'] = $row['log_id'];
        
        
        $myarray['data'] = 'successful';

        $myarray['message'] = $row;
    } 
    elseif($count == 1 &&  $type =='employee')
    {
    
        $_SESSION['log_id'] = $row['log_id'];
        $myarray['data'] = 'successful';

        $myarray['message'] = $row;
    }
    
    else {
        $myarray['message'] = 'something went wrong';
    }
    

    echo json_encode($myarray);
}
?>

