<?php
require_once '../config/database.php';

$createTableSql = "CREATE TABLE IF NOT EXISTS invoices (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    invoice_no INT(11) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    qty INT(11) NOT NULL,
    total DECIMAL(10, 2) NOT NULL
)";

if ($conn->query($createTableSql) === TRUE) {
    echo "Table 'invoices' created successfully or already exists.\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

$conn->close();
?>