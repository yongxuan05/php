<!DOCTYPE html>
<html>

<body>

    <?php

    $array = array(34, 56.3, "Total", True, 365, 34.78, 99, 84, 3.3);
    $isin_array = array();

    foreach ($array as $element) {
        if (is_int($element)) {
            $isin_array[] = $element;
        }
    }
    print_r($isin_array);


    ?>
</body>

</html>