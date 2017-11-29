<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:23
 */
$n = $_POST['n'];
$m = $_POST['m'];
$r = $_POST['r'];
$g = $_POST['g'];
$b = $_POST['b'];
?>

<!DOCTYPE html>
<<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <h1 align="center">Test</h1>
<!--    --><?php
//        echo "<h2 style='background-color: rgb(".$r,$g,$b.")'></h2>";
//    ?>
    <table border="1">
    <?php
        for($i = 1; $i <= $n; $i++){
            echo "<tr align='center'>";
            for($j = 1; $j <= $m; $j++){
                echo "<td style='width: 50px' bgcolor='#a9a9a9' ><span style='font-size: 2em ' > " . $i*$j . "</span></td>  ";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
