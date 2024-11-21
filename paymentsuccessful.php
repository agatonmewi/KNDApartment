<?php
include("db_connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['transaction_id']) && isset($_GET['user_id']) && isset($_GET['amount'])) {
    $transaction_id = $_GET['transaction_id'];
    $user_id = $_GET['user_id'];
    $amount = $_GET['amount'];
    $status = "Success"; // Assuming success for this example, confirm with GCash's response if necessary

    // Save the transaction to the database
    $sql = "INSERT INTO transactions (user_id, amount, transaction_id, status) VALUES (?, ?, ?, ?)";
    $stmt = $dorm_db->prepare($sql);
    $stmt->bind_param("idss", $user_id, $amount, $transaction_id, $status);

    if ($stmt->execute()) {
        echo "<h3>Payment Successful!</h3>";
        echo "<p>Transaction ID: " . htmlspecialchars($transaction_id) . "</p>";
        echo "<p>Amount Paid: PHP " . htmlspecialchars($amount) . "</p>";

        // Generate a link to the receipt
        echo "<p><a href='receipt.php?transaction_id=" . htmlspecialchars($transaction_id) . "' target='_blank'>Download Receipt</a></p>";
    } else {
        echo "Failed to record payment. Please contact support.";
    }

    $stmt->close();
} else {
    echo "Payment information missing or invalid.";
}
?>