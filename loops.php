<?php
    #Loops: For, while, do...while, foreach.

    #For Loop

    // for($i = 0;$i <= 10;$i ++){
    //     echo 'Number ' .$i;
    //     echo '<br/>';
    // }

    #While loop

    // $i = 0;

    // while($i < 10){
    //     echo $i;
    //     echo '<br/>';
    //     $i++;
    // }

    #Do while
    
    // $i = 0;

    // do{
    //     echo $i;
    //     echo '<br/>';
    //     $i++;
    // }

    // while($i < 10);

    #Foreach

    // $people = array('Brad', 'Leslie', 'Steve');

    // foreach($people as $person){
    //     echo $person;
    //     echo '<br/>';
    // }

    $people = array('Brad' => 'email@test.com', 'Leslie'=> 'email@test.com', 'Steve'=> 'email@test.com');

    foreach($people as $person => $email){
        echo $person.': '.$email;
        echo '<br/>';
    }
?>