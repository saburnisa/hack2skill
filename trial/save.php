<?php
include("signup.php");

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass=$_POST['pass'];

    // Basic validation
    if (empty($username) || empty($email) || empty($pass)) {
        echo "Username and email are required.";
    } else {
        $stmt = $conn->prepare("INSERT INTO table1 (Username, Email,Pass) VALUES (?, ?,?)");

        if ($stmt) {
            // Bind parameters in the correct order
            $stmt->bind_param("sss", $username, $email,$pass);

            // Execute the statement
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "Data inserted successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

// Close the connection
$conn->close();
?>






