<?php

$conn=mysqli_connect("localhost","root","","home_service");
if(mysqli_connect_error())
{
    die("Error in connection");
}




$name =$_POST['name'];
$email =$_POST['email'];
$password=$_POST['password'];
$address =$_POST['address'];
$phone_number =$_POST['phone_number'];
$experience =$_POST['experience'];
$service_type =$_POST['service_type'];
$filename=$_FILES["photo"]["name"];
$tempname=$_FILES["photo"]["tmp_name"];
$folder = "./image/".$filename;
$image=$filename; 

$uploadOk=1;
$imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "avf" && $imageFileType != "gif")
{
    
    $uploadOk =0;
    
}
if($uploadOk == 0)
{
    echo "sorry";
}
else
{
    move_uploaded_file($tempname,$folder);
}




 $sql=mysqli_query($conn,"INSERT INTO employee_reg(name,email,address,phone_number,experience,service_type,photo) VALUES('$name','$email','$address','$phone_number','$experience','$service_type','$image')");
 $emp_id = mysqli_insert_id($conn);
 $log=mysqli_query($conn, "INSERT INTO login_emp_user(log_id,email,password,type)values('$emp_id','$email','$password','employee')");
if($log)
{
     $myarray['message'] = 'Added';
     $query = mysqli_query($conn,"SELECT * FROM employee_reg WHERE emp_id='$emp_id' ");
     
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