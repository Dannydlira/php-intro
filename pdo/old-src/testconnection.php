<?php 

$link = mysqli_connect('localhost', 'root', 'Helo20'); 
if (!$link) { 
die('Could not connect: ' . mysqli_error($pdo)); 
} 
echo 'Connected successfully'; 
mysqli_close($link); 