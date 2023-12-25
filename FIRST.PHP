<?php
$fileName = 'data.csv';

// Function to generate a unique 6-character hex value
function generateHexValue() {
    return substr(uniqid(), 5, 8);
}

// Read existing CSV data
$data = array_map('str_getcsv', file($fileName));

// Generate and write unique hex values to the 3rd column
for ($i = 1; $i < count($data); $i++) {
    $data[$i][2] = strtolower(generateHexValue()); 
}

// Write back to the CSV file
$fp = fopen($fileName, 'w');
foreach ($data as $row) {
    fputcsv($fp, $row);
}
fclose($fp);
?>
