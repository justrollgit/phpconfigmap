<?php

$ini_array = parse_ini_file("/config/app.properties");

print($ini_array['color']);
?>
