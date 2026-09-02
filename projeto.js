// INICIALIZAÇÃO DA PÁGINA
document.addEventListener ("DOMContentLoaded",function (){
    // Carrega a tabela ao abrir a página
    listarProjetos();

    //Quando clicar em Salvar,executa salvarPrjeto()
    document.getElementById("formProjeto").addEventListener("submit", salvarProjeto)
});

// LISTAR PROJETOS (READ)
async function listarProjetos(){
    const resposta = await fetch ("ProjetoController.php?acao=listar",{method: "GET",});
    const resultado = await resposta.json();
    const tabela = document.getElementById("tabelaProjetos");
    tabela.innerHTML = "";

    resultado.dados.forEach(function (projeto){
        tabela.innerHTML +=`
        <tr>
        <td>${projeto.id}</td>
        <td>${projeto.nome}</td>
        <td>${projeto.duracao} mês (es)</td>
        <td>${projeto.responsavel}</td>

        <td>
        <button class="btn btn-warning btn-sm" onclick="editarProjeto(${projeto.id})"> Editar </button>
        <button class-"btn btn-danger btn-sm"onclick="excluirProjeto(${projeto.id})"> Excluir </button>
        
        </td>
        </tr>
        `;
    });
    
}

//SALVAR PROJETO
// CADASTRAR OU EDITAR CREATE/UPDATE
async function salvarProjeto    (event){
    // IMPEDE O RECARREGAMENTO DA PÁGINA
    event.preventDefault();

    //CAPTURA OS DADOS DO FORMULARIO
    const formulario = document.getElementById("formProjeto");
    const dados = new FormData(formulario);

    // ENVIA OS DADOS PARA O CONTROLLER
    const respostas = await fetch("ProjetoController.php?acao=cadastrar", {
        method:"POST",
        body:dados,
    });

    // Recebe a resposta do PHP
    const resultado = await respostas.json();

    //Exibe a mensagem
    alert(resultado.mensagem);

    // se salvou com sucesso...
    if(resultado.sucesso == true){
        alert("deu!!")
        //ATUALIZA A TABELA
        listarProjetos();
    }
}