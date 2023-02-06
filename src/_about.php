<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php
$color = "Blue";
echo "my TV color is " . $color;
echo "my TV color is $color";

// scopes or namespaces
$value1 = 1000;
$value2 = 2000;
// functions
function message()
{
    global $value1, $value2;
    $total_amount = $value1 + $value2; # local namespace/scope
    $name = "Mulenga";
    echo "Hi $name, you have earned yourself $total_amount";
    $amount_type = var_dump($total_amount);
    echo "$amount_type";
    echo strlen($name);
    return $name;
}
message();
echo "somebody already won a $$total_amount";
# mathematics
// abs(-4) > 4
// sqrt(4) > 2
// max([1,2,3,4]) > 4
// min([1,2,3,4]) > 1
// pi() > 3.14
// round(5.6) > 6
// round(5.2) > 5
// rand([1,4]) > 1 or 4
# global variables
define("GREETING", message(), case_insensitive: true);
echo GREETING;

# Conditional statements
if (date("H") >= 18) {
    echo "Good evening";
} elseif (date("H") <= 17) {
    echo "Good afternoon";
} elseif (date("H") <= 11) {
    echo "Good morning!";
} else {
    echo "Hello";
}

# Awesome conditional statement
$id = 1234;
switch ($id) {
    case 1234:
        echo "Let him in";
        // = $id == 1234: do stuff
        break;

    case 234:
        echo "Intruder";
        break;
    default:
        // else: do stuff
        "Your id will be processed soon.";
}
// loops
while (true) {
    echo "infinite loop";
}
do {
    echo("hello world");
} while(3 === 3);

?>