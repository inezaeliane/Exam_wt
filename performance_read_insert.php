<?php
// Connection
include('database_connection.php');

// Insert data if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind the parameters
    $stmt = $conn->prepare("INSERT INTO performance ( Portofolio_id, Investment_name,Type_of_investment, Amount,Purchase_price,Purchase_date,Current_value,Dividends) VALUES ( ?, ?, ?, ?,?,?,?,?)");

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error in preparing statement: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("ssssssss", $portfolio,  $name, $type, $amaunt, $pprice,$pdate,$value,$dividends);

    // Set parameters and execute
     $portfolio = $_POST['portfolio_id'];
    $name = $_POST['investment_name'];
    $type = $_POST['type_of_investment'];
    $amaunt = $_POST['amount'];
    $pprice = $_POST['purchase_price'];
    $pdate = $_POST['purchase_date'];
    $value = $_POST['current_value'];
    $dividends = $_POST['dividends'];

    if ($stmt->execute()) {
        header("Location:investment.php");
        echo "New record has been added successfully";

    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Close connection
$conn->close();
?>
