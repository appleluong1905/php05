<?php
@ob_start();
@session_start();

include 'config/config.php';
include 'models/post.php';

//xử lý request từ trình duyệt và gọi controller / action tương ứng
if(isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'posts';

if(isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';

$file = 'controllers/'.$controller.'/'.$action.'.php';

if (file_exists($file)) {
    require($file);
} else {
    require('404.php');
}

mysql_close($db);
@ob_end_flush();
