<?php
function __autoload($classadi)
{
	require_once 'classes/'.$classadi.'.php';
}

$gunaydin=new gunaydin('Hasan');
echo '<br/>';
$ogle=new oglen('Kamil');
echo '<br/>';
$aksam=new iyiaksamlar('Jale');
?>