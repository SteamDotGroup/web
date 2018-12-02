<?php

require 'utils.php';

$request = $_SERVER['REQUEST_URI'];
$sg_base_url = "https://steamcommunity.com/groups/";

//Set arguments
$args = explode('/', $request);
$option = "redirect";

//Set steamgroup name
$sg = $args[1];

if($sg == null) {
    //No steamgroup given => Error
    error('No steamgroup set!');
    die();
}

//Check for options
if (count($args) > 2) {
    $option = $args[2];
}

//Set full steamgroup URL
$sg_url = $sg_base_url . $sg;

//Redirect to steamgroup
header("Location: $sg_url");
?>