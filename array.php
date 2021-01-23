<?php


    // foreach($multi as $a => $a_value) {
    //     foreach($a_value as $a1 => $a1_value) {
        //         // echo $a. " ". $a1. " " . $a1_value. "<br>";
    //         echo $a1_value . " ";
    //     }
    //     echo "<br>";
    // }

    // foreach($nums as $a => $a_value) {
        //     if(is_array($a)) {
            //         foreach($a_value as $a1 => $a1_value) {
                //             echo $a1_value . " ";
                //         }
                //     }
                //     echo $a_value . " ";
                //     echo "<br>";
                // }
                
    $multi =  array(array(1,2,3), array(4,5,6), array(7,8,9));
    $nums = array('1', '2', '3', '4', '5', '6');
    $ass = array('name' => 'Angham', 'age' => '29');

    function checkArray($arr) {
        foreach($arr as $a => $a_value) {
            if(is_array($a_value)) {
                foreach($a_value as $a1 => $a1_value) {
                    echo $a1_value . " ";
                }
            } else {
                echo $a_value . " ";
            }
            echo "<br>";
        }
        echo "<br>";
    }
    checkArray($multi);
    checkArray($nums);
    checkArray($ass);

    //by Salameh Yasin
    foreach($salary as $k=>$soso){
        //if(is_array($soso)){}
        //if(gettype($soso) == 'array'){}
        if(is_array($soso)){
            foreach ($soso as $key => $value) {
                echo $key." ".$value."<br>";
            }
        }else{
            echo $k." ".$soso."<br>";
        }
    }
    
?>