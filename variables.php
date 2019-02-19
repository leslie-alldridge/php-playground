<?php
    // Single line comment
    # Single line comment
    /*
        Multi
        Line
    */

    #Variables
    /*
        -Prefix with $
        -Start with letter or underscore
        -Only letters numbers and underscores
        -Case sensitive
    */

    #Data Types
    /*
        -String
        -Integers
        -Float
        -Boolean
        -Null
        -Array
        -Object
    */

    $output = 'Hello World';

    $num1 = 4;
    $num2 = 44;
    $sum = $num1 + $num2;

    $float1 = 4.4;
    $bool1 = true;

    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1 .' '. $string2. '!';
    $greeting2 = "$string1 $string2!";

    $string3 = 'They\'re here';

    echo $string3;
?>