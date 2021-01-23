<?php 
    //1. array_change_key_case
    //array_change_key_case(arrayName, Case) by default CASE_LOWER
    $array = ['username' => 'Angham'];
    print_r(array_change_key_case($array, CASE_UPPER));
    echo "<br>";
//-------------------------------------------------------------------------------------------------------//
    //2. array_chank 
    //array_chank(arrayName, size each small array, true); by default false as new array
    //if set third param True well complete index in smalls arrays if not well reset index foreach new smasll arry
    $array1 = array('a', 'b', 'c', 'd', 'e');
    echo "<pre>";
        print_r(array_chunk($array1, 2));
    echo "</pre>";
    //arr1 => a,b | arr2 => c,d | arr3 => e
    // Array ( [0] => Array ([0] => a [1] => b )
    //         [1] => Array ([0] => c [1] => d )
    //         [2] => Array ([0] => e ) )
    echo "<pre>";
        print_r(array_chunk($array1, 2, true));
    echo "</pre>";
    // Array ( [0] => Array ([0] => a [1] => b )
    //         [1] => Array ([2] => c [3] => d )
    //         [2] => Array ([4] => e ) )
//-------------------------------------------------------------------------------------------------------//
    //3. array_column
    // array_column(arrayName, column_key, index_key(optional))
    //array must be multi-dimensional
    //index_key change key from index numbers to what I pass it
    $records = array(
        array(
            'id' => 3111,
            'first_name' => 'Angham',
            'last_name' => 'Bani Younes',
        ),
        array(
            'id' => 1311,
            'first_name' => 'Nghm',
            'last_name' => 'Bani-Younes',
        ),
        array(
            'id' => 1131,
            'first_name' => 'ANGHAM',
            'last_name' => 'Aslan',
        ),
        array(
            'id' => 1113,
            'first_name' => 'Nagham',
            'last_name' => 'Aslan',
        ),
    );
    $first_names = array_column($records, 'first_name');
    print_r($first_names);
    //Array ( [0] => Angham [1] => Nghm [2] => ANGHAM [3] => Nagham )
    echo "<br>";
    $first_names = array_column($records, 'first_name', 'first_name');
    print_r($first_names);
    // Array ( [Angham] => Angham [Nghm] => Nghm [ANGHAM] => ANGHAM [Nagham] => Nagham )
    echo "<br>";
    $first_names = array_column($records, 'first_name', 'id');
    print_r($first_names);
    echo "<br>";
    // Array ( [3111] => Angham [1311] => Nghm [1131] => ANGHAM [1113] => Nagham )
//-------------------------------------------------------------------------------------------------------//
    //4. array_combine
    // creates array by using one array for keys and another for its values
    // array_combine(arrayName1 $key, arrayName2 $values)
    // well return false if elements in each array not equal
    $a = array('green', 'red', 'yellow');
    $b = array('avocado', 'apple', 'banana');
    $c = array_combine($a, $b);
    print_r($c);
    echo "<br>";
    // Array ( [green] => avocado [red] => apple [yellow] => banana )
    $names = array('Angham', 'Nagham', 'Nghm');
    $ages = array('29', '30', '28');
    $d = array_combine($names, $ages);
    print_r($d);
    echo "<br>";
//-------------------------------------------------------------------------------------------------------//
    //5. array_count_values
    // array_count_values(arrayName)
    // count value in array how many repeated
    // just count string or integer
    $colors = ['white', 'red', 'yellow', 'orange', 'white', 'yellow', 'white', 'green'];
    print_r(array_count_values($colors));
    echo "<br>";
    $nums = ['1', 1, 2, 3, 6, 3, '3'];
    print_r(array_count_values($nums));
    echo "<br>";
    //Array ( [1] => 2 [2] => 1 [3] => 3 [6] => 1 )
//-------------------------------------------------------------------------------------------------------//
    //6. array_diff_assoc
    // get the different between arrays by key and value dependent in array1
    $arr1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
    $arr2 = array("a" => "green", "yellow", "red");
    print_r(array_diff_assoc($arr1, $arr2));
    //Array ( [b] => brown [c] => blue [0] => red )
    echo "<br>";

?>