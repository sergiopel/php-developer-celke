function nome_funcao(){
    alert("Login ou senha incorreta");
}

function somar(a, b){
    var total = a + b;
    alert("Valor da soma: " + total);
}

function desconto(a, b){
    var totalDesc = a - b;
    //document.write("Valor final com desconto: " + totalDesc);
    return totalDesc;
}

 var resultTotalDesc = desconto(97, 15);
 document.write("Valor final com desconto: " + resultTotalDesc);
