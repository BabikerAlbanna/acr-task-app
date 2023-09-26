<?php

echo "\n";

$myfile = fopen("/bab/phpbase.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("/bab/phpbase.txt"));
fclose($myfile);



$myfile = fopen("/bab/phpapp.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("/bab/phpapp.txt"));
fclose($myfile);

echo "\n";