<?php
/** setting **/
define('BASEURL' , 'http://training.dev/php05/practice1/');

/** kết nối MySQL **/
$db = mysql_connect('localhost', 'root', 'none') or die('Could not connect to Server');
mysql_select_db('practice1') or die('Could not connect to Database');
mysql_set_charset('utf-8');