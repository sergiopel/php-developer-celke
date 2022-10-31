<?php

function countFrequencies(array $words) {
  // Write your code here
  $result = sort($words);
  $result2 = array();
  $cont = 0;
  $palavra_guarda = '';
  foreach($words as $palavra){
    if (empty($palavra_guarda)){
        $palavra_guarda = $palavra;
        $cont = 0;
    } elseif ($palavra_guarda != $palavra){
        array_push($result2, $cont);
        $palavra_guarda = $palavra;
        $cont = 0;
    }
   
    $cont += 1;
     
  }
  array_push($result2, $cont);

  //var_dump($result);
  // To debug (equivalent to var_dump): error_log(var_export($var, true));
  
  return $result2;
}


/*
function dobrar_array($array){
    foreach($array as $lista){
        echo $lista * 2 ."<br>";
    }
}
*/

$teste = countFrequencies(array('the', 'dog', 'got', 'the', 'bone'));
var_dump($teste);