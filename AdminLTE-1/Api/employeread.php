<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "home_service");

if (mysqli_connect_error()) {
    die("Error in connection");
}
$query = mysqli_query($conn,"SELECT * FROM employee_reg");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="clo-4">
            <center><h1> Employee Registration </h1></center> 
                <center>
                <table class="table table-bordered table-white text-dark mt-5 "style ="width:50%">
                    <thead>
                        <tr>
                            <th>emp_id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>address</th>
                            <th>phone number</th>
                            <th>experience</th>
                            <th>service_type</th>
                            <th>photo</th>
                            <th>Action</th>
                            
                           
                                
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($query))
                        {
                            
                        ?>
                        <tr>
                            <td><?php echo $row['emp_id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['phone_number']; ?></td>
                            <td><?php echo $row['experience']; ?></td>
                            <td><?php echo $row['service_type']; ?></td>
                          <td> <img src="./image/<?php echo $row['photo'];?>"  width="75"  height="75" ></td> 
                          <td>
                         <a href="delete_employee.php?emp_id=<?php echo $row['emp_id']; ?>" class="btn btn-danger" >Block</a>
                             </td>
                          
                            
                          

                           
                            
                        </tr>
                       
                       <?php } ?>
                       
   
    

                    </tbody>
                    
                </table>
                </center>
                <button type="button" class="btn btn-primary" onclick="window.location.href='http://localhost/housekeepingservice/AdminLTE-1/index.php'">back</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>