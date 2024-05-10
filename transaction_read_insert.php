<?php
// Connection
include('database_connection.php');

// Insert data if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind the parameters
    $stmt = $conn->prepare("INSERT INTO transaction ( Investment_id , Transaction_type,Amount, Transaction_price,Transaction_date,Fees,	Taxes) VALUES (  ?, ?, ?,?,?,?,?)");

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error in preparing statement: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("sssssss", $investment,  $ttype, $amaunt, $tprice, $tdate,$fees,$tax);

    // Set parameters and execute
     $investment = $_POST['investment_id'];
    $ttype = $_POST['transaction_type'];
    $amaunt= $_POST['amount'];
    $tprice = $_POST['transaction_price'];
    $tdate = $_POST['transaction_date'];
    $fees = $_POST['fees'];
    $tax = $_POST['taxes'];
    

    if ($stmt->execute()) {
        header("Location:transaction.php");
        echo "New record has been added successfully";

    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Close connection
$conn->close();
?>
