<?php
    require 'CustomFunctions.php';                          // Load custom PHP functions
    initiateCollector();
    require 'fileLocations.php';                            // sends file to the right place

    $data = array( 'Username' => $_SESSION['Username'], 'ID' => $_SESSION['ID'] ) + $_POST;
    // write user demographics data to demographics file
    arrayToLine($data, $demoPath);
    
    header("Location: instructions.php");
    exit;
?>