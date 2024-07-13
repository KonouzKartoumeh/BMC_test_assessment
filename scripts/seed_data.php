<?php
require_once '../config/database.php';

$seedData = [
    ['invoice_no' => 599, 'price' => 150, 'qty' => 1, 'total' => 0.00],
    ['invoice_no' => 599, 'price' => 200, 'qty' => 5, 'total' => 0.00],
    ['invoice_no' => 599, 'price' => 250, 'qty' => 2, 'total' => 0.00],
    ['invoice_no' => 600, 'price' => 140, 'qty' => 1, 'total' => 0.00]
];

foreach ($seedData as $invoice) {
    $invoice_no = $invoice['invoice_no'];
    $price = $invoice['price'];
    $qty = $invoice['qty'];
    $total = $invoice['total'];
    
    $insertSql = "INSERT INTO invoices (invoice_no, price, qty, total) VALUES ($invoice_no, $price, $qty, $total)";
    
    if ($conn->query($insertSql) === TRUE) {
        echo "Record inserted successfully.\n";
    } else {
        echo "Error inserting record: " . $conn->error . "\n";
    }
}

$conn->close();
?>