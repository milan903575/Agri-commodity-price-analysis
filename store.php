<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedDistrict = $_POST['selected_district'];

    if (!empty($selectedDistrict)) {
        // Define the path to your text file
        $file = 'C:/xampp/htdocs/ap/pro/stored.txt'; // Update this with your file path

        // Open the file in write mode and store the selected district
        $fileHandle = fopen($file, 'w') or die("Unable to open file!");
        fwrite($fileHandle, $selectedDistrict);
        fclose($fileHandle);

        echo "Selected district '$selectedDistrict' stored successfully!";
    } else {
        echo "Please select a district!";
    }
}
?>
