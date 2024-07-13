<!-- Write PHP code to establish connection to the database and fetch ALL rows with condition 
 `invoice_no` = 599 and save the result into an array. -->
 <?php
require_once '../config/database.php';

function fetchInvoices($conn) {
    $sql = "SELECT * FROM invoices WHERE invoice_no = 599";
    $result = $conn->query($sql);

    $invoices = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $invoices[] = $row;
        }
    }
    return $invoices;
}

$invoices = fetchInvoices($conn);
?>