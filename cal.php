<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Title text -->
        <title>PHP CALCULATOR</title>
    </head>
    <body>
        <!-- Form starts -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
            Number 1: <input type="text" name="param1" placeholder="Enter number 1"><br>
            Number 2: <input type="text" name="param2" placeholder="Enter number 2"><br>
            operator &nbsp;&nbsp; : <input type="text" name="operator" placeholder="+   -   *   /"><br>
            <input type="submit">
            </br></br>

            <!-- PHP script starts -->
            <?php
                // Getting parameters and the operator from the form by GET method
                error_reporting(0);
                $param1 = $_GET["param1"] ?? null;
                $param2 = $_GET["param2"] ?? null;
                $operator = $_GET["operator"] ?? null;

                // Checking all the parameters are numeric
                $param1_numeric = is_numeric($param1);
                $param2_numeric = is_numeric($param2);

                switch($param1_numeric && $param1_numeric) {
                    case 1:
                        // Checking the operator either + or - or * or /
                        switch ($operator) {
                            // Process when the operator is +
                            case "+":
                                $addition = $param1 + $param2;
                                echo "$addition </br>";
                                break;
                            // Process when the operator is -
                            case "-":
                                $subtraction = $param1 - $param2;
                                echo "$subtraction </br>";
                                break;
                            // Process when the operator is *
                            case "*":
                                $multiplication = $param1 * $param2;
                                echo "$multiplication </br>";
                                break;
                            // Process when the operator is /
                            case "/":
                                $division = $param1 / $param2;
                                echo "$division </br>";
                                break;
                        }
                        break;
                }
            ?>
        </form>
    </body>
</html>