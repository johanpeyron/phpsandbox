<?php    
  //echo date('d');     // day
  //echo date('m');     // month
  //echo date('Y');     // year
  //echo date('l');     // week
  
  //echo date('Y/m/d'); // 2018/06/13
  //echo date('Y-m-d'); // 2018-06-13
  
  //echo date('h');     // Hour
  //echo date('i');     // Minutes
  //echo date('s');     // Seconds
  //echo date('a');     // AM or PM

  // Set Time Zone
  //echo date_default_timezone_get(); // Europe/Berlin

  //echo date('h:i:sa');

    /* What is the unix time stamp?
    The unix time stamp is a way to track time as a running total
    of seconds. This count starts at the Unix Epoch on 
    January 1st, 1970 at UTC */
    //$timestamp = mktime(6, 32, 51, 10, 20, 1961);
    //echo $timestamp;  //-258771600
    //echo date('Y-m-d h:i:sa', $timestamp);  //1961-10-20 06:32:51am
    //$timestamp2 = strtotime('3:00pm June 13 2018');
    //echo $timestamp2;   // 1528894800
    //echo date('Y-m-d h:i:sa', $timestamp2);  //2018-06-13 03:00:00pm
    
    $timestamp3 = strtotime('tomorrow');
    $timestamp3 = strtotime('next Sunday');
    $timestamp3 = strtotime('+2 Days');
    echo date('Y-m-d h:i:sa', $timestamp3);  //2018-06-14 12:00:00am

?>