<?php

namespace Core;

class ConfigController
{
    private string $url;
    
    public function __construct()
    {
        echo "Carregar a página<br>";
        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            //url no browser:
            // http://localhost/php-developer-celke/9-Criar-Site/artigos/index?situacao=1&origem=email
            //var_dump($this->url); //aqui pega "artigos/index"
            //http://localhost/php-developer-celke/9-Criar-Site/contato
            var_dump($this->url); //pega a página contato
            //se quiser pegar o que vem depois:
            //$situacao = filter_input(INPUT_GET, 'situacao', FILTER_DEFAULT);
            //var_dump($situacao);
            //$origem = filter_input(INPUT_GET, 'origem', FILTER_DEFAULT);
            //var_dump($origem);
        } else {
            echo "Acessa a página inicial<br>";
        }
    }
}