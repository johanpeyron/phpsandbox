<?php
    # Function - block of code that can be repeatedly called

    /*
      Camel Case - myFunction()
      Lower Case - my_function()
      Pascal Case 0 MyFunction()
    */

    /*
    function simpleFunction(){
        echo 'Hejja Jacob';
    }

    simpleFunction();
    */

    // Function with param
    // Use a default for $name
    function sayHello($name = 'World'){
      echo "Hello $name<br>";
    }

    /* 
    sayHello('Louise');  // Hello $name if single quotes in function
    sayHello("Louise");  // Hello Louise if double quotes in function
    sayHello();          // Hello World
    */
    /*
    function addNumbers($num1, $num2){
      return $num1 + $num2;
    }

    echo addNumbers(789, 1024);
    */

    # By Reference - &$

    $myNum = 10;

    function addFive($num){
      $num += 5;
    }
    
    function addTen(&$num){
      $num += 10;
    }

    addFive($myNum);
    echo '$myNum after addFive: '.$myNum. '<br>';  // 10
    
    addTen($myNum);
    echo '$myNum after addTen: '.$myNum. '<br>';  // 20

    
?>