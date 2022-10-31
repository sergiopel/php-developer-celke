<?php

// Esse namespace faz com que o composer identifique onde a classe está
// É através desse namespace que eu consigo indicar que eu quero carregar a classe 
// que está dentro do diretório core
namespace Core;

// O core é o responsável por identificar qual Controller (página) deve ser carregada

class ConfigController
{

    private string $url;
    private array $urlArray;
    private string $urlController;
    private string $urlMetodo;

    public function __construct()
    {
        // se não for vazio e o usuário digitou algo a mais na url (usuário digitou ex: /contato/index)
        // ver regra no .htaccess
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            //var_dump($this->url);
            $this->urlArray = explode("/", $this->url);
            //var_dump($this->urlArray);
            if (isset($this->urlArray[0]) and isset($this->urlArray[1])) {
                $this->urlController = $this->urlArray[0];
                $this->urlMetodo = $this->urlArray[1];
            } else {
                $this->urlController = "erro";
                $this->urlMetodo = "index";
            }
        } else { // cai aqui se ele quiser acessar a página home (usuário não digitou nada a mais na url)
            $this->urlController = "home";
            $this->urlMetodo = "index";
        }

        //echo "Controller: {$this->urlController} - Método: {$this->urlMetodo} em ConfigController.php <br>";

        //var_dump(filter_input(INPUT_GET, 'origem', FILTER_DEFAULT));

        //blog/index?origem=facebook&qualvariavel=5
        //index.php?url=blog/index&origem=facebook&qualvariavel=5

    }

    public function loadPage()
    {
        $urlController = ucwords($this->urlController); //transforma a primeira letra do controler em maiúsculo
        //echo "Carregar a página/Controller - método loadPage() em ConfigController.php<br>";
        $classLoad = "\\Sts\Controllers\\" . $urlController;
        //echo $classLoad . "<br>";
        $classPage = new $classLoad();
        // se o usuário digitou /home/index, por exemplo
        $classPage->index();
    }
}
