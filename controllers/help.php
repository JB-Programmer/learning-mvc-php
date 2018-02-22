<?php


class Help {

    function __construct(){
        echo "I help.php, in controllers folder<br><br>";

    }

    public function other($arg = false){
        echo "I am the other function of help.php<br><br>";
        echo "It is the optional argument inside other: ".$arg;
    }
}


?>