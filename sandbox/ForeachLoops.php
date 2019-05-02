<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Foreach Loops</title>
    </head>
    <body>
        <?php
            $ages = array(4,8,15,16,23,42);

            foreach ($ages as $age) {
                echo "Age: {$age}<br />";
            }
        ?>
        <br />
        <?php // foreach using assoc. array

            $person = array (
                        "first_name"    => "Brandon",
                        "last_name"     => "Vreeman",
                        "address"       => "123 Main Street",
                        "city"          => "Big City",
                        "state"         => "MN",
                        "zip_code"      => "12345"
            );

            foreach($person as $attribute => $data) {
                $attr_nice = ucwords(str_replace("_", " ", $attribute));
                echo "{$attr_nice}: {$data}<br />";
            }
            
        ?>
        <br />
        <?php
            $prices = array("Brand New Computer" => 2000,
                            "1 month of Lynda.com" => 25,
                            "Learning PHP" => null);
            
            foreach($prices as $item => $price) {
                echo "{$item}: ";
                if (is_int($price)) {
                    echo "$" . $price;
                } else {
                    echo "priceless";
                }
                echo "<br />";
            }
        ?>
    </body>
</html>