<?php
    # substr()
    # Returns a portion of a string

    //$output = substr('Hello', 1);
    //$output = substr('Hello', 1, 3);
    //$output = substr('Hello', -2);
    //echo $output;

    # strlen()
    # Returns the length of a string

    //$output = strlen('Hello World');
    //echo $output;

    # strpos()
    # Finds the position of the first occurence of a string

    //$output = strpos('Hello World', 'o');
    //echo $output;

    # strrpos()
    # Finds the position of the last occurence of a string

    //$output = strrpos('Hello World', 'o');
    //echo $output;

    # trim()
    # Strip whitespace

    /*
        $text = 'Hello World               ';
        //var_dump($text);

        $trimmed = trim($text);
        var_dump($trimmed);
    */

    # strtoupper
    # Makes everything uppercase

    // $output = strtoupper('Hello World');
    // echo $output;

    # strtolower
    # Makes everything lowercase

    // $output = strtolower('Hello World');
    // echo $output;

    # ucwords
    # Capitalize every word

    // $output = ucwords('hello world');
    // echo $output;

    # str_replace()
    # Replace all occurences of a search string with a replacement

    // $text = 'Hello World';
    // $output = str_replace('World', 'Everyone', $text);
    // echo $output;

    # is_string()
    # Check if string

    // $val = 'Hello';
    // $output = is_string($val);

    // echo $output; // 1

    // $val = 59;
    // $output = is_string($val);

    // echo $output; //

    /*
        $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4',
            '', ' ', 0, '0');

        foreach ($values as $value) {
            if (is_string($value)) {
                echo "{$value} is a string<br>";
            }
        }
    */

    # gzcompress()
    # Compress a string

    $string = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
            ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
            explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut 
            odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
             sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
             amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora 
             incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima
             veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut 
             aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui
             inea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem
             eum fugiat quo voluptas nulla pariatur?";
    
    $compressed = gzcompress($string);
    // echo $compressed;

    $uncompressed = gzuncompress($compressed);
    echo $uncompressed;
