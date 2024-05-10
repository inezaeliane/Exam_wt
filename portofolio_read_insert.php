<?php
// Connection
include('database_connection.php');

// Insert data if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind the parameters
    $stmt = $conn->prepare("INSERT INTO portfolio ( Portfolio_name, Description, Total_value, Date_created) VALUES ( ?, ?, ?, ?)");

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error in preparing statement: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("ssss",  $portfolio_name, $description, $total_value, $date_created);

    // Set parameters and execute
     $portfolio_name = $_POST['portfolio_name'];
    $description = $_POST['description'];
    $total_value = $_POST['total_value'];
    $date_created = $_POST['date_created'];

    if ($stmt->execute()) {
        header("Location:Portofolios.php");
        echo "New record has been added successfully";

    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Close connection
$conn->close();
?>
