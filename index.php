<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Soding Task</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <form method="post" action="">
    <input type="text" name="value">
    <input type="submit">
    </form>
    <?php
    include 'prime.php';

    $p = new IsPrime();
    $max_sum = $_POST['value'];
    $sum = 0;
    $num = 6;
    $term = 0;

        while (($sum + $num) < $max_sum) {
            if ($p->check($num)) {
                $sum += $num;
                $term++; // track term
            }
            $num++;
        }
        echo "The sum below ". $max_sum . " is : " .$sum;
        echo "</br>Consisting of : " . $term . " terms";
    ?>
</body>
</html>