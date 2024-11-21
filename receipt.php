<?php
include("db_connection.php");

if (isset($_GET['transaction_id'])) {
    $transaction_id = $_GET['transaction_id'];

    $sql = "SELECT * FROM transactions WHERE transaction_id = ?";
    $stmt = $dorm_db->prepare($sql);
    $stmt->bind_param("s", $transaction_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $transaction = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Receipt - Transaction <?php echo htmlspecialchars($transaction['transaction_id']); ?></title>
        </head>
        <body>
            <h1>Payment Receipt</h1>
            <p>Transaction ID: <?php echo htmlspecialchars($transaction['transaction_id']); ?></p>
            <p>Amount: PHP <?php echo htmlspecialchars($transaction['amount']); ?></p>
            <p>Status: <?php echo htmlspecialchars($transaction['status']); ?></p>
            <p>Date: <?php echo htmlspecialchars($transaction['date']); ?></p>
            <button onclick="window.print()">Print Receipt</button>
        </body>
        </html>
        <?php
    } else {
        echo "Invalid transaction ID.";
    }

    $stmt->close();
} else {
    echo "Transaction ID not provided.";
}
?>