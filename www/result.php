<?php
//header("Content-Length: 4");
header('Content-type: text/plain; charset=utf-8');
$test=stripslashes($_POST['test']);
if(isset($test))
{
	echo 'ajax';
	}
	else { echo 'no...';}
?>