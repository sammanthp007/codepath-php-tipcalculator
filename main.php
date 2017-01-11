<!DOCTYPE html>
<html>
    <head>
        <title> Tippy </title>
    </head>
    <body>
        <h1>
            Tippy
        </h1>
        <h2>
            Calculate your tip
        </h2>
            <div>
                <form action="main.php" method="post">
                    <label for="billInput">Bill:  $</label>
                    <input type="text" name="billInput" value="<?php echo isset($_POST['billInput']) ? $_POST['billInput'] : NULL; ?>" required/>
                    <br>
                    
                    <label for="tipPercentage">Tip Percentage</label>
                    <?php
                        $tips = [10, 15, 20];
                        for ($i=0; $i < 3; $i++) {
                    ?>
                    <input type="radio" name="tipPercentage" value="<?php echo $tips [$i]; ?>" required> <?php echo $tips[$i]."%"; ?>
                    <?php
                        }
                    ?>
                    <br>
                    <input type="submit" value="Submit" name="submit"/>
                </form>
            </div>

            <div>
                <?php
                    $input_total = $_POST["billInput"];
                    $input_tip = $_POST["tipPercentage"];
                    if (isset($_POST["submit"])) {
                        echo "<hr>";
                        if ($input_total && $input_tip) {
                            if (is_numeric($input_total) && floatval($input_tip) >= 0) {
                                $total_pay = floatval($input_total);
                                $tip_total = (floatval($input_tip) / 100) * $total_pay;
                                $total_pay = $total_pay + $tip_total;

                                echo "Tip:      $";
                                echo number_format($tip_total, 2)."<br>";

                                echo "Total:    $";
                                echo number_format($total_pay, 2)."<br>";
                            }
                        }
                    }
                ?>
            </div>
    </body>
</html>