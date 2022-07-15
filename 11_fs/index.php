<?php
// Magic constants
// echo __DIR__ . '<br>'; // current directory 
// echo __FILE__ . '<br>'; // current file path
// echo __LINE__ . '<br>'; // current line no.
// Create directory

// mkdir("test"); // creates test directory inside the current root level
// mkdir("../test"); // creates test directory one level above the root level

// Rename directory
// rename("test2","test"); rename (orignal name,changed name)

// Delete directory
// rmdir("test");

// Read files and folders inside directory
// $fileNames = scandir("../");
// echo '<pre>';
//     var_dump($fileNames);
// echo '</pre>';

// file_get_contents, file_put_contents

// $contentFromFile = file_get_contents("lorem.txt");
// echo '<pre>';
//     var_dump($contentFromFile);
// echo '</pre>';

// file_put_contents("sample.text","Some content");

// file_get_contents from URL
$details = file_get_contents("https://jsonplaceholder.typicode.com/todos/1");
echo '<pre>';
    $jsonDecoded = json_decode($details,true);
    var_dump($jsonDecoded);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php

// file_exists
var_dump(file_exists("sample.text"));

echo '<br>';

// is_dir
var_dump(is_dir("../12_oop"));

// filemtime
// filesize
// disk_free_space
// file
