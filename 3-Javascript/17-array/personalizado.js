var frutas = ["Abacate", "Abacaxi", "Amora", "Açaí", "Cereja", "Figo"];

//Contar a quantidade de itens do array
//console.log mostra no console do browser, acessado pelo botão direito > inspecionar > console
console.log("Quantidade de frutas: " + frutas.length);

//Acessar primeiro item do Array
console.log("Primeira fruta: " + frutas[0]);

//Acessar outra posição
console.log("Outra posição: " + frutas[2]);

//Acessar último item do array
console.log("Última fruta: " + frutas[frutas.length-1]);

//Adicionar um item ao final do array
frutas.push("Maçã");

//Adicionar ao início do array mais um item
frutas.unshift("Kiwi");

//Remover um item ao final do array
frutas.pop();

//Remover o primeiro item do array
frutas.shift();

//Remover qualquer outra posição do array
//frutas.splice(pos, n);  a partir da posição (pos), quantos itens serão removidos (n)
frutas.splice(2,3);

//Ler todo o array
frutas.forEach(function(item, indice, array){
    console.log(item, indice);
})

/********************************************************************************/
 console.log("--------------- novo array -----------------");
var carros = ["Voyage", "Virtus", "Jetta", "A1", "A2", "A3"];

// Adicionar um item ao final do array
carros.push("A4");

// Remover a partir da posição 2, 3 itens
carros.splice(2,3);

//Ler os itens do novo array acima
carros.forEach(function(item, indice, array){
    console.log(item, indice);
})