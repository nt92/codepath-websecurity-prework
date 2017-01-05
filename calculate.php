<!-- Script to do calculation -->
<?php
$bill = $_GET['bill'];
$percent = $_GET['percent'];
$number = $_GET['number'];
$tip = $bill * $percent;
$subtotal = $bill + $tip;
// Handles division by zero
if ($number !=0 ) {
    $total = ($bill + $tip) / $number;
} else {
    $number = 1;
    $total = ($bill + $tip) / $number;
}
?>

<!-- Results page -->
<!DOCTYPE html>
<html>
    <head>
        <title>Tip Calculator</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
        <body>
            <div id="content">
                <h1>Tip Calculator</h1>
                <p><table id="table">
                    <tr>
                        <td class="left">Total amount: &nbsp;</td>
                        <td class="right">$<?php echo number_format($bill, 2); ?></td>
                    </tr>
                    <tr>
                        <td class="left">Tip percentage: &nbsp;</td>
                        <td class="right"><?php echo ($percent * 100); ?> %</td>
                    </tr>
                    <tr>
                        <td class="left">Tip amount: &nbsp;</td>
                        <td class="right">$<?php echo number_format($tip, 2); ?></td>
                    </tr>
                    <td class="left">Bill subtotal: &nbsp;</td>
                    <td class="right">$<?php echo number_format($subtotal, 2); ?></td>
                    <tr>
                        <td class="left">Number of payers: &nbsp;</td>
                        <td class="right"><?php echo ($number); ?></td>
                    </tr>
                <td class="left"><h4>Total per person:&nbsp;</h4></td>
                <td class="right"><h3>$<?php echo number_format($total, 2); ?></h3></td>
                </table>
                </p>
            </div>
        </body>
</html>
