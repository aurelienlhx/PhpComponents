<?php

$files = glob(__DIR__.'/../src/*.php');
foreach($files as $file){
	require_once($file);
}