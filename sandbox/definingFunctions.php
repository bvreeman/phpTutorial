<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Defining Functiions</title>
    </head>
    <body>
        <?php
            function say_hello() {
                echo "Hello World!<br />";
            }
            say_hello();
            function say_hello_to($word) {
                echo "Hello {$word}!<br />";
            }
            say_hello_to(Brandon);
            say_hello_to(Everyone);

            // a function can be called before defining it
            // but it's good practice to call the function
            // after defining it

            say_hello_loudly();

            function say_hello_loudly() {
                echo "HELLO WORLD!<br />";
            }

            //function say_hello_loudly() {
            //    echo "We can't redefine a function<br />";
            //}
        ?>

    </body>
</html>