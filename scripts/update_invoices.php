<?php
require_once '../config/database.php';
require_once 'fetch_invoices.php';
require_once '../functions/calculate_total.php';

function updateInvoices($conn, $invoices) {
    foreach ($invoices as $invoice) {
        $id = $invoice['id'];
        $total = $invoice['total'];
        $sql = "UPDATE invoices SET total = $total WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully for ID: $id\n";
        } else {
            echo "Error updating record for ID: $id - " . $conn->error . "\n";
        }
    }
}

// Fetch, calculate totals and update
$invoices = fetchInvoices($conn);
$invoicesWithTotals = calculateTotal($invoices);
updateInvoices($conn, $invoicesWithTotals);

$conn->close();
?>