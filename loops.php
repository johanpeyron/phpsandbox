<?php
    # LOOPS - Execute code a set number of times

    /*
        For
        While
        Do...While
        Foreach - for arrays
    */

    # For Loop
    # @params - init, condition, inc

    /*
    for($i = 0; $i < 10; $i++){
      echo $i . '<br>';
    }
    */

    # While Loop
    # @params - condition

    /*
    $i = 0;

    while ($i <= 100) {
      echo $i;
      echo '<br>';
      $i++;
    }
    */

    # Do...While
    # @params - condition

    /*
    $i = 0;

    do{
      echo $i;
      echo '<br>';
      $i++;
    }

    while ($i < 10);
    */

    # foreach loop - for arrays
    /*
    $peyrons = array('Tom', 'Eva-Britta', 'Simon', 'Louise', 'Jacob');

    foreach($peyrons as $peyron){
      echo $peyron;
      echo '<br>';
    }
    */
    
    # Associative array
    $peyrons = array('Simon' => 'simonpeyron@hotmail.com', 'Louise' => 'louisepeyron@gmail.com', 'Jacob' => 'HexHack@peyron.com');

    foreach($peyrons as $peyron => $email){
      echo $peyron. ' : ' .$email;
      echo '<br>';
    }
?>