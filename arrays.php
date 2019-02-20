<?php
    #Arrays
    /*
        - Indexed
        - Associative
        - Multi-Dimensional
    */

    //Indexed Array

    $people = array('Leslie', 'Luke', 'Yuzuki');
    $ids = array(23, 35, 65);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Fiat';
    $cars[] = 'BMW';

    
    //length of array
    //echo count($cars); 

    //print array
    //print_r($cars);
    //var_dump($cars); <- also shows data types

    //Associative Arrays
    $people = array('Brad' => 22, 'Leslie' => 35);
    $ids = [22 => 'Brad', 35 => 'Leslie'];
    echo $people['Leslie'];

    $people['Jill'] = 42;

    print_r($people);
    
    //Multi Dimensional
    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 20, 2),
        array('Ford', 22, 12),
    );

    echo $cars[1][2];
?>