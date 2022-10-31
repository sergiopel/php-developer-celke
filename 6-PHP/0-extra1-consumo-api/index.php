<!DOCTYPE html>
 <html>
 <head>
      <title>Exemplo 01 - Consumindo via php</title>
 </head>
 <body>
      <h1>Consumo de Api</h1>
      <?php
        $url = "https://viacep.com.br/ws/01310300/json/";
        $resultado = json_decode(file_get_contents($url));
        var_dump($resultado);

        foreach ($resultado as $endereco){
            echo $endereco . "<br>";
        }

/*
        echo "Date: " . $resultado->results->date;

        foreach ($resultado->results as $result){
            echo "Dia: " . $result->date . "<br>";
        }
*/        

      ?>
 </body>
 </html>