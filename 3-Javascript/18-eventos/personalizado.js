function carConteudo(){
    document.getElementById("conteudo").innerHTML = "Vivamus quis eleifend dolor. Aliquam orci ligula, sodales sed fermentum vel, venenatis eu nisl. Donec molestie dignissim justo, ut aliquam felis sodales in. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec et lectus id arcu varius volutpat.";
}

function mouseOver(){
    document.getElementById("mouseAlt").innerHTML="<span style='color: #ff0000;'>Retire o mouse</span>";
}

function mouseOut(){
    document.getElementById("mouseAlt").innerHTML="Passe o mouse";
}

function converterTexto(){
    var nome = document.getElementById("nome");
    nome.value = nome.value.toUpperCase();
}

function validarSenha(){
    var senha = document.getElementById("senha").value;

    if (senha == "" || senha.length <= 5){
        document.getElementById("erroSenha").innerHTML = "<span style='color: #ff0000;'>Preencha o campo senha com no mínimo 6 caracteres</span>";
    } else {
        document.getElementById("erroSenha").innerHTML = "<span style='color: #00ff00;'>Senha válida</span>";
    }
}