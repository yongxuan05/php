<!DOCTYPE html>
<html>

<body>

    <?php

    $array = array(34, 56.3, "Total", True, 365, 34.78, 99, 84, 3.3);

    foreach ($array as $element) {
        if (is_int($element)) {
            echo $element . '<br>';
        }
    }


    ?>
</body>

</html>