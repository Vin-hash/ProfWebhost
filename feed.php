<?php
session_start(); // Start the session if not already started

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or handle unauthorized access
    header("Location: login.php");
    exit();
}

// Database connection
include ('database.php');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $feedback_text = $_POST['feedback'];

    // Insert feedback into the database
    $sql = "INSERT INTO feedback (user_id, feedback_text) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $user_id, $feedback_text);

    if ($stmt->execute()) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error submitting feedback: " . $stmt->error;
    }
    header("refresh:3;url=index.php");
    $stmt->close();
    exit;
}

// Close the database connection
$conn->close();
?>
