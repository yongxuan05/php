<!DOCTYPE html>
<html>

<body>

    <?php

    $oddNumbers = array();

    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 !== 0) {
            $oddNumbers[] = $i;
        }
    }

    print_r($oddNumbers);

    ?>
</body>

</html>