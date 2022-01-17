<?php

function readFromCsv($fileName)
{
    $fh = fopen($fileName, 'r');
    while (!feof($fh)) {
        $line = fgetcsv(fh);
        if (!empty($line)) {
            $data[] = $line;
        }
        fclose($fh);
        return $data;
    }
