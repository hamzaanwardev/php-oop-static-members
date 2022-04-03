<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Static Members</title>
</head>
<body>
    <h1>PHP OOP Static Members</h1>
    <p>In PHP OOP whenever we make a class and also the properties and methods of that class then we have to make objects of them in order use them.</p>
    <p>But with Static Members we can use properties and methods of class without making object.</p>
    <p>You will be really thinking in PHP Object Oriented Programming how can we use Properties and classes without making object So, have a look Please how i am doing this?</p>
    <p>We will not use this-> while using static members becvause this is used while making objects. We will use self:: instead of this-></p>
    <?php
        class personal {
            public static $name = "Hamza Anwar";
            public static function show() {
                echo self::$name;
            }
        }

        echo personal::$name . "<br>";
        personal::show();

        // $test = new personal();
        // $test->show();
    ?>

    <h2>Using Static Members In Inherit class.</h2>
</body>
</html>