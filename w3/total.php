<!DOCTYPE html>
<html>

<body>

    <?php
    $num = 1;
    $sum = 0;
    while ($num <= 100) {
        $sum = $sum + $num;
        $num++;
    }
    echo "The total sum number from 1 to 100 = " . $sum;

    ?>

</body>

</html>