/*!
    * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2023 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    } 
});
  
// document.querySelectorAll(".MeuModalBtn").forEach(botao => {
//         botao.addEventListener("click", ()=>{
//             alert("clicado");
//             abrirModal(this);
//         });
// });

//FUNÇÕES DO MODAL DE PRODUTOS
document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".MeuModalBtn").forEach(botao => {
            botao.addEventListener("click", function() {
                abrirModal(this);                
            });
        });
});

function abrirModal(botao) 
{
    var id = botao.getAttribute("data-id");  
    var situacao = botao.getAttribute("data-situacao");            
    var codigo = botao.getAttribute("data-codigo");    
    var referencia = botao.getAttribute("data-referencia");
    var descricao = botao.getAttribute("data-descricao");
    var descricaoComplementarstring = botao.getAttribute("data-descricaoComplementarstring");
    var unidade = botao.getAttribute("data-unidade");
    var codigotipo = botao.getAttribute("data-codigotipo");
    var codigoGrupo = botao.getAttribute("data-codigoGrupo");
    var codigoSubGrupo = botao.getAttribute("data-codigoSubGrupo");
    var custo = botao.getAttribute("data-custo");
    var precoVenda = botao.getAttribute("data-precoVenda");
    var dataCadastro = botao.getAttribute("data-dataCadastro"); 
    var icms = botao.getAttribute("data-icms"); 
    var ipi = botao.getAttribute("data-ipi");
    var tributacaoPis = botao.getAttribute("data-tributacaoPis");
    var pis = botao.getAttribute("data-pis");        
    
//   var codigoFabricante = botao.getAttribute("data-codigoFabricante");        
//   var custGerencial = botao.getAttribute("data-custGerencial");
//   var custoMedio = botao.getAttribute("data-custoMedio");
//   var ultimoCusto = botao.getAttribute("data-ultimoCusto");          
//   var precoVendaFinanciamento = botao.getAttribute("data-precoVendaFinanciamento");
//   var ultimoPrecoVenda = botao.getAttribute("data-ultimoPrecoVenda");
    var origem = botao.getAttribute("data-origem");
    var tributacao = botao.getAttribute("data-tributacao");       
    var tributacaoIpi = botao.getAttribute("data-tributacaoIpi");        
    var tributacaoCofins = botao.getAttribute("data-tributacaoCofins");
    var cofins = botao.getAttribute("data-cofins");

    document.getElementById("meuModal").value = id;          
    document.getElementById("meuModal").classList.add("show");
    document.getElementById("meuModal").style.display = "block";       

    //document.getElementById("codigoFabricante").value = codigoFabricante;
    //document.getElementById("custGerencial").value = custGerencial;
    //document.getElementById("custoMedio").value = custoMedio;
    //document.getElementById("ultimoCusto").value = ultimoCusto;
    //document.getElementById("precoVendaFinanciamento").value = precoVendaFinanciamento;
    //document.getElementById("ultimoPrecoVenda").value = ultimoPrecoVenda;
    document.getElementById("origem").value = origem;
    document.getElementById("tributacao").value = tributacao;
    document.getElementById("tributacaoIpi").value = tributacaoIpi;
    document.getElementById("tributacaoCofins").value = tributacaoCofins;
    document.getElementById("cofins").value = cofins;    
    document.getElementById("situacao").value = situacao;
    document.getElementById("codigo").value = codigo;
    document.getElementById("referencia").value = referencia;
    document.getElementById("descricao").value = descricao;
    document.getElementById("descricaoComplementarstring").value = descricaoComplementarstring;
    document.getElementById("unidade").value = unidade;
    document.getElementById("codigotipo").value = codigotipo;
    document.getElementById("codigoGrupo").value = codigoGrupo;
    document.getElementById("codigoSubGrupo").value = codigoSubGrupo;        
    document.getElementById("custo").value = custo;         
    document.getElementById("precoVenda").value = precoVenda;     
    document.getElementById("icms").value = icms;       
    document.getElementById("ipi").value = ipi;
    document.getElementById("tributacaoPis").value = tributacaoPis;
    document.getElementById("pis").value = pis;          
    document.getElementById("dataCadastro").value = dataCadastro;  
        
};
function fecharModal(){    
    document.getElementById("meuModal").style.display = "none";
}
//FIM FUNÇÕES DO MODAL DE PRODUTOS

   