<?php
if ($_SERVER['REQUEST_METHOD'] = $_POST) {
    $first = htmlspecialchars($_POST['num1']);
    $second = htmlspecialchars($_POST['num2']);
    if (!is_numeric($first) or !is_numeric($second)) {
        echo 'Please enter a number';
    } else {
        if ($_POST['operation'] == 'add') {
            echo $first + $second;
        } elseif ($_POST['operation'] == 'subtract') {
            echo $first - $second;
        } elseif ($_POST['operation'] == 'multiply') {
            echo $first * $second;
        } elseif ($_POST['operation'] == 'divide') {
            switch ($second) {
                case 0:
                    echo 'You cannot divide zero';
                    break;

                default:
                    echo $first / $second;
                    break;
            }
        }
    }
}
?>
<p>If you want to do some corrections, go <a href="/myphp/calc.php" style="text-decoration: none;
color:inherit;
font-weight:bold ">back</a> to the calculator</p>