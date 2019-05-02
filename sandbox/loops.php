<!DOCTYPE html>
<html lang="en">
    <head>
        <title>While Loops</title>
    </head>
    <body>

        <?php
            $count = 0;
            while ($count <= 10) {
                if ($count == 5) {
                    echo "FIVE, ";
                } else {
                echo $count . ", ";
                }
                $count++; // increment by 1
            }
            echo "<br />";
            echo "Count: {$count}";
        ?>

    </body>
</html>