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
        <form action="main.php" action="post">
            <label for="billInput">Bill:  $</label>
            <input type="text">
            <br>
            <label for="tipPercentage">Tip Percentage</label>
            <input type="radio" name="tipPercentage" value="male" checked> 10%
            <input type="radio" name="tipPercentage" value="female"> 15%
            <input type="radio" name="tipPercentage" value="other"> 20%<br>
            <input type="submit" value="Submit">
        </form>

    </body>
</html>

