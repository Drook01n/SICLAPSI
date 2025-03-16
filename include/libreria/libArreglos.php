<?php
function arrayToString($array)
{
    $tmp = serialize($array);
    $tmp = urlencode($tmp);
 
    return $tmp;
}
function stringToArray($array)
{
    $tmp = stripslashes($array);
    $tmp = urldecode($tmp);
    $tmp = unserialize($tmp);
 
    return $tmp;
}
?>