<?php
    $multi = array(
        array(1,"anas","IT"),
        array(2,"jinan","Kitchen"),
        array(3,"heba","sales"),
        array(4,"ahmad","HR")
    );

    $mutli2 = array(
        array(1,2,3,4),
        array("anas","jinan","heba","ahmad"),
        array("IT","Kitchen","sales","HR"),        
    ); 
    
    $id    = array();
    $names = array();
    $dept  = array();

// $multi will printed as multidimessional array contain employee info 
// array(1,"anas","IT"),
    function getArrays($arr) {
        foreach($arr as $a => $a_value) {
            foreach($a_value as $a1 => $a1_value) {
                if($a1 == 0) {
                    $id[] = $a1_value;
                } elseif ($a1 == 1) {
                    $names[] = $a1_value;
                } elseif ($a1 == 2) {
                    $dept[] = $a1_value;
                }
            }
            echo "<br>";
        }
        echo "<pre>";
            print_r($id);
            print_r($names);
            print_r($dept);
        echo "</pre>";
    }
    getArrays($multi);

    //----------------------------------
    // function getArray($arr) {
    //     $arrNew = array();
    //     $a = array();
    //     $b = array();
    //     $c = array();
    //     $d = array();
    //     foreach($arr as $a => $a_value) {
    //         foreach($a_value as $a1 => $a1_value) {
    //             for($i = 0; $i < 4; $i++) {
    //                 for($j = 0; $j < 4; $j++) {
    //                     if(($j == $i) && ($j == 0)) {
    //                         $a[] = $a1_value;
    //                     }
    //                 } 
    //                 $arrNew[] = $a;
    //             }
    //         }
    //     }
    //     echo "<pre>";
    //         print_r($arr);
    //     echo "</pre>";
    // }
    // getArray($multi2);
?>