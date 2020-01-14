<?php
echo('What is your first name?'.PHP_EOL);
$response = readline('');
echo('What is your last name?'.PHP_EOL);
$response2 = readline('');
echo('Your name is' . ' ' . $response . ' ' . $response2);
?>