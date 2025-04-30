// Copyright (c) 2020 Mr. Coxall All rights reserved
//
// Created by: Mr. Coxall
// Created on: Sep 2020
<?php
// Initialize the result variable
$result = '--';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the input values from the form
    $sideA = isset($_POST['sideA']) ? floatval($_POST['sideA']) : 0;
    $sideB = isset($_POST['sideB']) ? floatval($_POST['sideB']) : 0;
    $height = isset($_POST['height']) ? floatval($_POST['height']) : 0;

    // Validate input
    if ($sideA > 0 && $sideB > 0 && $height > 0) {
        // Calculate the area of the trapezoid
        $result = (($sideA + $sideB) * $height) / 2;
        $result = number_format($result, 2); // Format result to two decimal places
    } else {
        $result = "Invalid input, please enter positive values for all fields.";
    }
}
?>



