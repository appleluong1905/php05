<!DOCTYPE html>
<html>
<head>
    <title>Practice 1</title>
</head>
<body>
<?php 
    foreach($posts as $post):
        echo $post['id'].' -- '.$post['title'].' -- '.$post['description'].'<br/>';
    endforeach;
    
    ?>
</body>
</html>