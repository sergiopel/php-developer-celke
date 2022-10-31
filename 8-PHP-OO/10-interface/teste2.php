<?php

/*
function filterDuplicates(array $data) {
  // Write your code here
  $data2 = array_unique($data, SORT_NUMERIC);
  // To debug (equivalent to var_dump): error_log(var_export($var, true));
  //var_dump($data2);
  return $data2;
}


$result = filterDuplicates(array(7, 6, 4, 3, 3, 4, 9));
var_dump($result);


*/


/*
function filterDuplicates(array $data) {
    // Write your code here
    $result2 = array();
    $cont = 0;
    $numero_guarda = '';
    foreach($data as $numero){
        foreach($data as $numero2){
            if($numero2 == $numero){
                break 1;
            }
        }

       
    }
    array_push($result2, $cont);
  
    //var_dump($result);
    // To debug (equivalent to var_dump): error_log(var_export($var, true));
    
    return [json_encode($result2)];
  }
  */

  function filterDuplicates(array $data) {
    // Write your code here
    $data2 = array_count_values($data);
    var_dump($data2);
    $data3 = array();
    foreach ($data2 as $valor => $qt){
      //if($qt === 1){
        $data3[] = $valor;
      //}
    }
    // To debug (equivalent to var_dump): error_log(var_export($var, true));
    //var_dump($data2);
    return $data3;

}

$result = filterDuplicates(array('7', '6', '4', '3', '3', '4', '9'));
var_dump($result);

/*
$array = array('2015', '2015', '2012', '2013', '2014', '2014', '2016');
$valores = array_count_values($array);

$novo = array();
foreach ($valores as $k => $v){
    if($v === 1) $novo[] = $k;
}

echo "<pre>";
print_r($novo);
*/