<!DOCTYPE html>
<html>

<body>

    <?php
    // default color
    $color = NULL;

    // color1
    $color1 = "#ffcbd1";

    // color2
    $color2 = "white";

    ?>
    <table border="1" cellpadding="15" cellspacing="0" width="200">
        <?php
        for ($x = 1; $x <= 100; $x++) {

            $color == $color1 ? $color = $color2 : $color = $color1;  //if color == color1, then print color2, else print color1 (if..else..)

            echo "<tr style='background-color:$color; text-align:center; font-weight:bold;'><td></td></tr>";
        }

        ?>
    </table>
    </table>
</body>

</html>