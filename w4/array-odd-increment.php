<!DOCTYPE html>
<html>

<body>

    <?php

    $odds = array();

    for ($i = 0; $i <= 100; $i++) {
        if ($i % 2 != 0) {
            echo "$i <br>";
            // $odds[] = $i;
        }
    }

    //for ($i = 0; $i < count($odds); $i++) {
    //  echo "array[" . $i . "] - " . $odds[$i] . "<br>";
    // }


    ?>
</body>

</html>