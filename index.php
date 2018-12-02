<?php

require './log/logger.php';

// Display the html from 'index.html'
$landing_page = file_get_contents('index.html');
echo ($landing_page);

// Send to logger
analytics();
