<?php

declare(strict_types=1);

$lastStrLen = 0;
$strLen = 0;
for ($i = 1; $i <= 100; $i++) {
    echo "$i";
    $strLen++;
    if ($strLen > $lastStrLen) {
        echo "\n";
        $lastStrLen = $strLen;
        $strLen = 0;
        continue;
    }
    echo " ";    
}