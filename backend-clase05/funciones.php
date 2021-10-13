<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set("utc");
date_default_timezone_set("America/Argentina");
echo time(). '<br>';


echo date('d/m/y H:i:s ', time());
echo '<br><br>';

echo date('d/m/y H:i:s ', strtotime('now'));
echo '<br><br>';

echo date('d/m/y H:i:s ', strtotime('+1 day'));
echo '<br><br>';