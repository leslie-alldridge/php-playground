<?php
    #Block of code that can be called repeatedly

    // function simpleFunction(){
    //     echo 'Hello World';
    // }

    // simpleFunction();

    // function simpleFunction($name = 'World'){
    //     echo "Hello $name<br/>";
    // }

    // simpleFunction('Leslie');
    // simpleFunction('Bob');


    // function addNumbers($num1, $num2){
    //     return $num1 + $num2;
    // }

    // echo addNumbers(2,3);

    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);

    echo "Value: $myNum <br/>";

    addTen($myNum);

    echo "Value: $myNum";
?>