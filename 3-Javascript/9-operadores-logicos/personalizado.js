var nota = 8;
var faltas = 27;

if(nota < 4 || faltas > 25){
    document.write("*** Reprovado *** Nota: " + nota + ". Faltas: " + faltas + "<br>");
}

nota = 8;
faltas = 23;

if(nota > 7 && faltas < 25){
    document.write("*** Aprovado *** Nota: " + nota + ". Faltas: " + faltas + "<br>");
}

var situacao = !true;
document.write("Situação: " + situacao + "<br>");