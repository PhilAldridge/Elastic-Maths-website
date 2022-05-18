<?php

$link = mysqli_connect('REDACTED', 'REDACTED', 'REDACTED', 'REDACTED');
if (!$link)
{
	print "unable to connect";
	exit();
}

if (!mysqli_set_charset($link, 'utf8'))
{
	print "unable to set database connection encoding";
	
	exit();
}
?>