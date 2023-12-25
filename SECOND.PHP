<?php
$fileName = 'data.csv';

// Read existing CSV data
$data = array_map('str_getcsv', file($fileName));

// Append custom text to the 4th column
for ($i = 1; $i < count($data); $i++) {
    $hexValue = $data[$i][2];
    $data[$i][3] = 'Merry Xmas! You have a message here https://seasons-greetings-ng.netlify.app/?'.$hexValue;
}

// Write back to the CSV file
$fp = fopen($fileName, 'w');
foreach ($data as $row) {
    fputcsv($fp, $row);
}
fclose($fp);
?>
