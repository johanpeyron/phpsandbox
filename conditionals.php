<?php    
    // CONDITIONALS

    /*
      ==
      ===
      <
      >
      <=
      >=
      !=
      !==
    */

/*     $num = 6;

    if ($num == 5) {
        echo '5 passed';
    } elseif ($num == 6) {
        echo '6 passed';
    } else {
        echo 'did not pass';
    } */

    # NESTING IF

/*     $num = 8;

    if ($num > 4) {
        if ($num < 10) {
            echo "$num passed";
        }
    } */

    # LOGICAL OPERATORS
    /*
    and &&
    or ||
    xor     one has to be true but not both
    */

   /*  $num = 5;

    if ($num > 4 && $num < 10) {
        echo "$num passed";   // 5 passed
    } */
    
    /* $num = 5;

    if ($num > 4 xor $num < 10) {
        echo "$num passed";   // no output
    } */


    $favColor = 'bla';

    switch ($favColor) {
        case 'red':
            echo 'Your favorite is red';
            break;
            case 'blue':
            echo 'Your favorite is blue';
            break;
            case 'green':
            echo 'Your favorite is green';
            break;
        default:
            echo 'Your favorite is something else';
    }

?>