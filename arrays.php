<?php
  /* Array - Variable that holds multiple values */
  /*
      - Indexed
      - Associative
      - Multi-dimensional 
  */

  // Indexed
  $people = array('Kevin', 'Putte', 'Blanca');
  $ids = array(22, 33, 44);
  $cars = ['Citroen', 'Peugeot', 'Tatra'];
  $cars[3] = 'Fiat';
  $cars[] = 'Saab';

  //echo count($cars);
  
  // Print what´s in the array
  //print_r($cars);

  // Good for debugging
  //var_dump($cars);

  //echo '$cars[0] = ' . $cars[0] . '<br>';
  //echo '$cars[3] = ' . $cars[3] . '<br>';
  //echo '$cars[4] = ' . $cars[4] . '<br>';

  // Associative arrays
  // key:value pairs
  $people = array('Louise' => 26, 'Simon' => 24, 'Jacob' => 27);
  /* echo $people['Louise'];   //26
  echo $people[24];   // Notice: Undefined offset */
  $ids = [9 => 'Lisa', 78 => 'Tyrone', 16 => 'Elsbeth'];
  //echo $ids[78];


  // Multi-Dimensional
  $cars = array(
    array('Citroen', 20, 12),
    array('Tatra', 2, 0),
    array('Fiat', 500, 30)
  );

  echo $cars[1][0];  // Tatra


?>