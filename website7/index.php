<?php
    $path = '/dir1/myfile.php';
    $file = 'file1.txt';

    /*
    // Return filename
    echo basename($path);

    // Return filename without extension
    echo basename($path, '.php');
    
    // Return the dirname from path
    // dirname — Returns a parent directory's path
    echo dirname($path);
    
    // file_exists — Checks whether a file or directory exists
    echo file_exists($file);
    
    // Get absolute path
    // realpath — Returns canonicalized absolute pathname
    echo realpath($file);
    
    // is_file — Tells whether the filename is a regular file
    echo is_file($file);
    
    // Is writable
    echo is_writable($file);
    
    // Is readable
    echo is_readable($file);
    
    // Get filesize
    echo filesize($file);
    
    // Create a directory
    mkdir('testing');
    
    // Remove an empty directory
    rmdir('testing');
    
    // Copy file
    echo copy('file1.txt', 'file2.txt');
    
    // Rename file
    echo rename('file2.txt', 'myfile.txt');
    
    // Delete file
    echo unlink('myfile.txt');
    
    // Write from file to string
    echo file_get_contents($file);
    
    // Write string to file, replace filecontent
    echo file_put_contents('file1.txt', ', Hejja Jacob');
    
    // Append to file
    $current = file_get_contents($file);
    $current .= ' Hejja, hejja!!';
    file_put_contents($file, $current);
    
    echo file_get_contents($file);
    */
    
    // Open file for reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data;
    fclose($handle);
    
    // Open file for writing
    $handle = fopen('file2.txt', 'w');
    $txt = "Louise, Simon och Jacob\n";
    fwrite($handle, $txt);
    $txt = "ÄR FANTASTISKA\n";
    fwrite($handle, $txt);
    fclose($handle);




?>