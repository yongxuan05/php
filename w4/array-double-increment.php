<!DOCTYPE html>
<html>

<body>

    <?php

    $array = array(1);

    for ($i = 1; $i < 10; $i++) {
        $array[] = $array[$i - 1] * 2;
    }
    print_r($array);

    ?>
</body>

</html>