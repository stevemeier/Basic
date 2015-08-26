<?php

chdir($_SERVER['DOCUMENT_ROOT'].'/themes/Basic-master');
$random = scandir('img');
// remove . and ..
array_shift($random);
array_shift($random);

$count = count($random) -1;

$number = rand(0, $count);

echo 'img/'.$random[$number]

?>
