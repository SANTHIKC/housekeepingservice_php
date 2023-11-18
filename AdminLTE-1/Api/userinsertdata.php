<?php
session_start();
$conn=mysqli_connect("localhost","root","","home_service");
if(mysqli_connect_error())
{
    die("Error in connection");
}


$user_name =$_POST['user_name'];
$email =$_POST['email'];
$password=$_POST['password'];
$address =$_POST['address'];
$phone_number =$_POST['phone_number'];
$filename=$_FILES["photo"]["name"];
$tempname=$_FILES["photo"]["tmp_name"];
$folder = "./image/".$filename;
$image=$filename; 

$uploadOk=1;
$imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
{
    
    $uploadOk =0;
    
}
if($uploadOk == 0)
{
    echo "imge not jpg";
}
else
{
    move_uploaded_file($tempname,$folder);
}


$sql=mysqli_query($conn,"INSERT INTO user_reg(user_name,email,address,phone_number,photo) VALUES('$user_name','$email','$address','$phone_number','$image')");
 $user_id = mysqli_insert_id($conn);
 
 
 $log=mysqli_query($conn, "INSERT INTO login_emp_user(log_id,email,password,type)values('$user_id','$email','$password','user')");
 
if($log)
{
     $myarray['message'] = 'Added';
     $query = mysqli_query($conn,"SELECT * FROM user_reg WHERE user_id ='$user_id'");
     
      $data=mysqli_fetch_assoc($query);
      
if($query)
{
     $myarray['data'] =$data ;
}

}
else
{
    $myarray['message'] = 'failed';
}
echo json_encode($myarray);





?>



  