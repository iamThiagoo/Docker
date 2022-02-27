<?php

    $msg = $_POST["textarea"];

    $files = scandir("./messages");
    $num_files = count($files) - 2; // . e ..

    $fileName = "msg-{$num_files}.txt";

    $file = fopen("./messages/{$fileName}", "x");

    fwrite($file, $msg);

    fclose($file);

    header("Location: index.php");