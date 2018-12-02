<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SteamDotGroup | redirecting...</title>

<?php

require 'utils.php';
require './log/logger.php';

$request = $_SERVER['REQUEST_URI'];
$sg_base_url = "https://steamcommunity.com/groups/";

//Set arguments
$args = explode('/', $request);
$option = "redirect";

//Set steamgroup name
$sg = $args[1];

if ($sg == null) {
    //No steamgroup given => Error
    error('No steamgroup set!');
    die();
}

//Check for options
if (count($args) > 2) {
    $option = $args[2];
}

analytics($sg);

//Set full steamgroup URL
$sg_url = $sg_base_url . $sg;

?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105814613-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-105814613-5');
</script>

</head>
<body>
    
</body>
</html>

<?php

//Redirect to steamgroup
header("Location: $sg_url");
die();

?>