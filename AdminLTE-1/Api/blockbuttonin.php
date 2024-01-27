<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "home_service");

if (mysqli_connect_error()) {
    die("Error in connection");
}

// Check if emp_id is provided in the URL
if (isset($_GET['emp_id'])) {
    $emp_id = $_GET['emp_id'];

    // Update the employee's status to blocked in the database
    $updateQuery =mysqli_query($conn,"UPDATE class SET name='$name', age='$age',email='$email',dob='$dob',photo='$image'  WHERE id='$id'");
    $result = mysqli_query($conn, $updateQuery);

    if ($result) {
        echo "Employee blocked successfully!";
    } else {
        echo "Error blocking employee: " . mysqli_error($conn);
    }
} else {
    echo "Employee ID not provided.";
}

mysqli_close($conn);
?>
