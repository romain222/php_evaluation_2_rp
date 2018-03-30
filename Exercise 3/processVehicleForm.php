<?php

// assuming the ajax request send using a post method
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    // gather the data
    $brand = $_POST['brand'] ?? NULL;
    $model = $_POST['model'] ?? NULL;
    $year = $_POST['year'] ?? NULL;
    $color = $_POST['color'] ?? NULL;
    
    // validate data
    $brandError = strlen($brand) < 3 && strlen($brand) > 20;
    $modelError = strlen($model) < 3  && strlen($model) > 30;
    $yearError = $year < 1850 && $year > 2018;
    $colorError = strlen($color) < 3 && strlen($color) > 15;
    
    // create corresponding error message
    $errorMessage = '';
    if($brandError){
        $errorMessage .= 'Brand name needs to be between 3 and 20 characters long.\n.';
    }
    if($modelError){
        $errorMessage .= 'Model name needs to be between 3 and 30 characters long.\n';
    }
    if($yearError){
        $errorMessage .= 'Year is not valid.\n';
    }
    if($colorError){
        $errorMessage .= 'Color needs to be between 4 and 15 characters long.\n';
    }
    
    //output feedback to user
    if($brandError || $modelError || $yearError || $colorError){
        echo $errorMessage;
    } else {
        echo 'Success! Added a new vehicle.';
    }
    
}