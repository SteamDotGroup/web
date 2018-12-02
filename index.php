<?php

require './log/logger.php';

$landing_page = file_get_contents('index.html');

echo ($landing_page);

analytics();
