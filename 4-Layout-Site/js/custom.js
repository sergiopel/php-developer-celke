/*se o usuário clicar no ícone de menu*/
document.querySelector('#menu-btn').addEventListener('click', function(){
    //console.log("Menu");

    /* se for ativo, desativa os itens do menu, senão ativa */
    document.querySelector('#menu-site').classList.toggle("active");
    /* ao ativar os itens do menu mudar o ícone para 'X', e ao clicar no 'X', desativa os itens de menu e reaparece o ícone de menu original */
    document.querySelector('#menu-icon').classList.toggle("active");
});