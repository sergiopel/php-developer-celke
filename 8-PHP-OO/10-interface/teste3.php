<?php

function filterWords(array $words, $letters)
{
    // Write your code here
    var_dump($letters);

    $array_saida = [];
    foreach ($words as $palavra) {
        /*
        if (preg_match("/{$letters[0]}/", $palavra)) {
            $array_saida[] = $palavra;
        }
        if (preg_match("/{$letters[1]}/", $palavra)) {
            $array_saida[] = $palavra;
        }
        */

        echo 'palavra: ' . $palavra;

        if (strpos($palavra, $letters[0])) {
            //echo $palavra;
            $array_saida[] = $palavra;
        }
        if (strpos($palavra, $letters[1])) {
            //echo $palavra;
            $array_saida[] = $palavra;
        }
    }



    // To debug (equivalent to var_dump): error_log(var_export($var, true));

    return $array_saida;
}


$result = filterWords(array('the', 'dog', 'got', 'a', 'bone'), 'ae');
//var_dump($result);
