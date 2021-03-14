<?php
    
    $formData = array(
        'Employee ID' => $eid,
        'Employee Name' => $name,
        'Email' => $email,
        'Date of Birth' => $_REQUEST["dob"],
        'Address' => $address,
        'State' => $state,
        'Country' => $country,
        'Phone' => $phone
    );

    $existingdata = file_get_contents('record.json');
    $tempJsonData = json_decode($existingdata);
    $tempJsonData[] = $formData;
    $jsonData = json_encode($tempJsonData, JSON_PRETTY_PRINT);

    if(file_put_contents('record.json',$jsonData)){
        $ValidateAllField = "Record Inserted.";
    }else{
        $ValidateAllField = "Opps!! No data saved.";
    }

?>
