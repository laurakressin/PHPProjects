<?php

$string = 'laurakressingmail.com';

if (strpos($string, '@') === false){
    print "This string does not contains an @";
} else {
    print "This string does contain an @";
}

?>