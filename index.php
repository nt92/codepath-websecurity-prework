<!-- Page to input information -->
<!DOCTYPE html>
<html>
    <head>
        <title>Tip Calculators</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
    <div id="content">
        <h1>Tip Calculator</h1>
            <form method="get" action="calculate.php">
                <table id="table">
                    <tr>
                        <td class="left">Enter bill amount: &nbsp;</td>
                        <td><input type="text" name="bill"></td>
                    </tr><tr>
                        <td class="left">Enter number of people paying: &nbsp;</td>
                        <td style="height:1em;"><input type="text" name="number"></td>
                    </tr>
                    <tr>
                        <td class="left">Choose tip percentage: &nbsp;</td>
                        <td class="selector"><select type="select" name="percent" style="text-align:center">
                                <option value="0.20">20%</option>
                                <option value="0.18">18%</option>
                                <option value="0.15">15%</option>
                                <option value="0.10">10%</option>
                                <option value="0">No tip</option>
                            </select></td>
                    </tr>
                    <tr><td></td><td><input type="submit" value ="SUBMIT"></td></tr>
                </table>
            </form>
    </div>
    </body>
</html>
