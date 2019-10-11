<?php
    header("Content-type: text/html; charset=utf-8");
    $editor = $_GET['editor'];
    $res = file_put_contents("data.txt", $editor);
    echo json_encode($editor);
?>