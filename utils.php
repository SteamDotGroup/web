<?php

function error($code) {
    header("Location: error.php?code=$code");
}

?>