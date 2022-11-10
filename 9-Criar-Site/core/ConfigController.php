<?php

namespace Core;

class ConfigController
{
    private string $url;

    private array $urlArray;
    private string $urlController;
    private string $urlParameter;
    private string $urlSlugController;
    private array $format;
    
    public function __construct()
    {
        echo "Carregar a página<br>";
        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            //url no browser:
            // http://localhost/php-developer-celke/9-Criar-Site/artigos/index?situacao=1&origem=email
            //var_dump($this->url); //aqui pega "artigos/index"
            //http://localhost/php-developer-celke/9-Criar-Site/contato
            echo '<pre>';
            var_dump($this->url); //pega a página contato
            echo '</pre>';
            //se quiser pegar o que vem depois:
            //$situacao = filter_input(INPUT_GET, 'situacao', FILTER_DEFAULT);
            //var_dump($situacao);
            //$origem = filter_input(INPUT_GET, 'origem', FILTER_DEFAULT);
            //var_dump($origem);

            // transforma string em array com 2 posições separados pelo '/'
            $this->urlArray = explode("/", $this->url);
            echo '<pre>';
            var_dump($this->urlArray);
            echo '</pre>';

            if (isset($this->urlArray[0])){
                echo '<pre>';
                var_dump($this->urlArray[0]);
                echo '</pre>';
                $this->urlController = $this->urlArray[0];
            } else {
                $this->urlController = "Home";
            }

        } else {
            echo "Acessa a página inicial<br>";
            $this->urlController = "Home";
        }

        echo "Controller: {$this->urlController}<br>";

    }
}