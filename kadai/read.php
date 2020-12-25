<?php
$openFile = fopen('./data/data.txt', 'r');

while ($line = fgets($openFile)) {
    echo nl2br ($line);
};

fclose($openfile);