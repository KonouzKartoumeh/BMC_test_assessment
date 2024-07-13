<?php
require_once '../scripts/fetch_invoices.php';
require_once '../functions/calculate_total.php';

$invoices = calculateTotal($invoices);

// Initialize total variables
$totalQty = 0;
$totalAmount = 0.00;

// Calculate total quantity and amount
foreach ($invoices as $invoice) {
    $totalQty += $invoice['qty'];
    $totalAmount += $invoice['total'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <h2>Invoice Table</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invoices as $index => $invoice) { ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $invoice['price']; ?></td>
                    <td><?php echo $invoice['qty']; ?></td>
                    <td><?php echo number_format($invoice['total'], 2); ?></td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="2"><strong>TOTAL</strong></td>
                <td><?php echo $totalQty; ?></td>
                <td><?php echo number_format($totalAmount, 2); ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>