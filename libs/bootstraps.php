<?php

$url = $_GET['url'];

//This will delete the last slash so as to avoid problems on the written url (if the url
//is finished on /, it will delete it and wont look for an argument to pass to
//the function)
$url = rtrim($url, '/');
$url=explode('/', $url);

echo "This is the url: ";
print_r($url);
echo "<br>";

require 'controllers/'.$url[0].'.php';
$controller = new $url[0]; //The first one will be only the controller, that is in controller folder.

//I am goint to check if there is an argument to pass to $url[1], and if it exists
//I will pass it into the function url[1](arg)

if (isset($url[2])){
    $controller->{$url[1]}($url[2]);

    } 
//Here is the option if there is not a third /url[2]/ argument.
    else { if (isset($url[1])) {
        $controller->{$url[1]}(); //If controllerxist, it should go to URL1 function, it is after the slashes
        //dont forget the () after the url because it is a function I want to be activated.
    }

}

?>