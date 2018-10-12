<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset = "utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />      
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
    <?php
        $error = "";
        if (isset($_POST['result']) || isset($_POST['calculator']))
        {
            $result = $_POST['result'];
            $input = $_POST['calculator'];
            if (!is_numeric($input))
            {
                $error = "Input is not a number.";
            }
            else if (isset($_POST['add']))
            {
                $result += $input;
            }
            else if (isset($_POST['sub']))
            {
                $result -= $input;
            }
            else if (isset($_POST['mul']))
            {
                $result *= $input;
            }
            else if (isset($_POST['div']))
            {
                $result /= $input;
            }
            else if (isset($_POST['eq']))
            {
                $result = $input;
            }
        }
        else
        {
            $result = 0.0;
            $input = 0.0;
        }
    ?>
    <div class="container">
        <h1>Calculator</h1>
        <form method="post">
            <h5>Nick Gallimore</h5>
            <legend>Calculator</legend>
            <label for="calculator">Enter a number to calculate:</label>
            <input type="text" name="calculator" id="calculator" class="form-control"/>
            <input class="calc-button" type="submit" name="add" value="+">
            <input class="calc-button" type="submit" name="sub" value="-">
            <input class="calc-button" type="submit" name="mul" value="*">
            <input class="calc-button" type="submit" name="div" value="/">
            <input class="calc-button" type="submit" name="eq" value="="><br />
            <label for="result">Result:</label>
            <input type="text" id="result" name="result" class="form-control" readonly 
                value="<?php echo floatval($result); ?>" />
            <p id="error"><?php echo($error); ?></p>
        </form>
    </div>
</body> 
</html>
