<!-- 2. Design a PHP function which would accept the array from the previous step as input,
  loop through the array and calculate the total of each row. (i.e. total = price x qty) 
  and return the result array. -->

<?php
function calculateTotal($invoices) {
    foreach ($invoices as &$invoice) {
        $invoice['total'] = $invoice['price'] * $invoice['qty'];
    }
    return $invoices;
}
?>