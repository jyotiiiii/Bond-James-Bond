<?php

 

$InputKey = 'myfile';

$AllowedTypes = ['csv'];

if(empty($_FILES[$InputKey])) { 
    echo "No file uploaded";

}


if(!in_array($_FILES[$InputKey]['type'], $AllowedTypes)){ 

    die  ("File type not supported");

}


if($_FILES[$InputKey]["error"] > 0){ 

    die("Error");

}


else {

 

$tempFile = $_FILES[$InputKey]['tmp_name'];

$destinationFile = "Uploads/".$_FILES[$InputKey]["name"];

 

move_uploaded_file($tempFile, $destinationFile);

 


echo "File successfully uploaded";
}

