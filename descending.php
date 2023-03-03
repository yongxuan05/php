<!DOCTYPE html>
<html>

<body>

    <?php
    foreach (range(99, 0, 2) as $number) {
        echo "$number <br>";
        $number += 2;
    }

    echo "\n";
    ?>

</body>

</html>