/********************************************************************************/
// criando um objeto de forma literal
document.write("<h2>Criando um objeto de forma literal</h2>")
var cadeira = {
    cor: "Preta",
    altura: 118,
    largura: 74,
    profundidade: 64,
}

document.write("Cor da cadeira: " + cadeira.cor + "<br>");
document.write("Altura da cadeira: " + cadeira.altura + "<br><br>");

cadeira.cor = "Branca"; // mudando o valor da propriedade cor do objeto cadeira
document.write("Cor da cadeira: " + cadeira.cor + "<br><br>");

// adicionando propriedade
cadeira.peso = 17;
document.write("Peso da cadeira: " + cadeira.peso + "<br><br>");

// apagar a propriedade profundidade
document.write("Profundidade da cadeira: " + cadeira.profundidade + "<br>");
delete cadeira.profundidade;
document.write("Profundidade da cadeira: " + cadeira.profundidade + "<br><hr>");

/*************************************************************************************/
// criar objeto usando o new
document.write("<h2>Criando um objeto usando o new</h2>")
var mesa = new Object();
mesa.cor = "Preta";
mesa.largura = 220;
document.write("Cor da mesa: " + mesa.cor + "<br>");
document.write("Largura da mesa: " + mesa.largura + "cm<br>");