<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Else and Else If</title>
    </head>
    <body>

        <?php

            $a = 4;
            $b = 5;

            if ($a > $b) {
                echo "a is larger than b";
            } elseif ($a < $b) {
                echo "a is smaller than b";
            } else {
                echo "a is equal to b";
            }

        ?>

    </body>
</html>