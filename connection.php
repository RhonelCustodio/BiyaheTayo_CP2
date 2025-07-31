<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "cp2_admin_users");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize inputs
    $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $feedback = isset($_POST['fdbk']) ? mysqli_real_escape_string($conn, $_POST['fdbk']) : '';

    // Use prepared statement
    $sql = "INSERT INTO admin_users_new (Fullname, Email, Feedback) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $feedback);
        
        if (mysqli_stmt_execute($stmt)) {
            echo "success";
        } else {
            echo "error";
        }
        
        mysqli_stmt_close($stmt);
    } else {
        echo "error";
    }
}

mysqli_close($conn);
?>