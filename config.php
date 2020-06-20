<?php

define('DB_SERVER', 'ec2-184-73-209-230.compute-1.amazonaws.com');
define('DB_USERNAME', 'lfhadkkmlkcnie');
define('DB_PASSWORD', 'd67e09d14e7db6437290f2c283f16932d604ca5b79cc0176ac84628d4a4be895');
define('DB_NAME', 'd7u282cul65hs6');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
