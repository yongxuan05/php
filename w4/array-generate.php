<!DOCTYPE html>
<html>

<body>

    <?php

    $array1 = array(20, 30, 40, 51, 60);
    $array2 = array(50, 24, 57, 34, 27);

    $sum = array();

    for ($i = 0; $i < count($array1); $i++) {
        $sum[$i] = $array1[$i] + $array2[$i];
    }

    print_r($sum);

    ?>
</body>

</html>