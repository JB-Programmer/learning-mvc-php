
<?php
//1

$urltemp = $_GET['url'];

$url=explode('/', $urltemp);
print_r($url);

require 'controllers/'.$url[0].'.php';
$controller = new $url[0];

if (isset($url[1])) {
    $controller->{$url[1]}(); //If controllerxist, it should go to URL1 function, it is after the slashes
}

?>

