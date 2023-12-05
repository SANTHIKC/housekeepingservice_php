

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "home_service");

if (mysqli_connect_errno()) {
    die("Error in connection");
}

$emp_id = $_POST['emp_id']; // Define $user_id if it's coming from a form or somewhere else

// $booking_id = $_POST['booking_id'];

$query = mysqli_query($conn, "SELECT booking.booking_id,booking.user_name,booking.date,booking.address,booking.phone_number, booking_approve.emp_id, booking.status
    FROM booking
    JOIN booking_approve ON booking.booking_id = booking_approve.booking_id
    JOIN employee_reg ON booking_approve.emp_id = employee_reg.emp_id
    WHERE booking.status = 'approve' AND booking_approve.emp_id = '$emp_id'");

$myarray = array();
if ($query) {
    while ($data = mysqli_fetch_assoc($query)) {
        $myarray['data'][] = $data; // Store each fetched row as an array within 'data'
    }
} else {
    $myarray['message'] = 'failed';
}
echo json_encode($myarray);
?>

