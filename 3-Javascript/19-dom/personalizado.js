document.getElementById("exemplo-um").innerHTML = "Inserir texto no exemplo um";

function exemploDois(){
    // recuperar todos os names "curso"
    var nomeElemento = document.getElementsByName("curso");
    console.log(nomeElemento);
}

function exemploTres(){
    // recuperar todas as tags span
    var nomeTag = document.getElementsByTagName("span");
    console.log(nomeTag);
}

function exemploQuatro(){
    //recuperar todas as tags li
    var nomeTagLista = document.getElementsByTagName("li");
    console.log(nomeTagLista);
}

function exemploCinco(){
    //recuperar todas as classes 'produto'
    var nomeClasse = document.getElementsByClassName("produto");
    console.log(nomeClasse);
}