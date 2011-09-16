<?php
//header("Content-Length: 4");
header('Content-type: text/plain; charset=utf-8');
echo $_POST['email'].' '.$_POST['password'];
?>