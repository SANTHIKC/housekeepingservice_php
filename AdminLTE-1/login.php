<?php 
session_start();
include 'connection.php';
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $result=mysqli_query($conn,"SELECT * FROM login WHERE username='$username'");
    if($result)
    {
        $row =mysqli_fetch_assoc($result);
        //$hash =password_verify($password,$row['password']);
        $count=mysqli_num_rows($result);
        if($count==1)
        {
            $_SESSION['id'] =$row['login_id'];
            ?>
            <script>window.location.href="index.php";</script>
            <?php
        }
    }
    else
    {
      echo "invalid password";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <section class="vh-100" style="background-color: #508bfc;">
  <form method="POST" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <h3 class="mb-5">Sign in</h3>

            <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" name="username" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" name="password" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>

            <!-- Checkbox -->
         

            <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
          
           

            <hr class="my-4">
            


          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</section>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>