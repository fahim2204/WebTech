<?php

     $data = file_get_contents("record.json");
	 $empData = json_decode($data);

    
    if(empty($empData)){
        echo 'No Data Found';
    }else{
            foreach($empData as $empObject)
            {
                foreach($empObject as $key=>$value)
                {
                    echo $key." = ".$value."<br>";
                }
                echo '<br>';
            }
         }
?>