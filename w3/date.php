<!DOCTYPE html>
<html>

<body>

    <?php
    $t = date("Y");
    $d = date("d");

    if ($t < "2020") {
        echo "no covid!";
    } else {
        echo "covid!";
    }

    echo "$d";

    ?>

</body>

</html>