<?php

$menu = $_POST['menu'];

switch($menu){
    case 'insert':
    echo("<script>location.replace('./menu/insert.html');</script>");
    break;
    case 'modify':
    echo("<script>location.replace('./menu/manage.html');</script>");
    break;
}

?>
