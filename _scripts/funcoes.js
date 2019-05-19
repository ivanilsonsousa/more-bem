/* --- Descrição da função preenche() ---
	Essa função pega o item selecionado no momento
	da criação de um novo Orçamento no evento de
	clique do elemento <select> dentro do fieldset
*/

function preenche(){
	var sel = document.getElementById("seletor")
	var indice = sel.options[sel.selectedIndex + 1].text

    $.ajax({
		type: 'POST',
		dataType: 'html',
		url: 'acoes.php',
		data: { 'indice' : indice },
		cache: false,

		success: function(data){
			var aux = data.split("&")
			document.getElementById("id-item").value = aux[0]
			document.getElementById("marca").value = aux[1]
			document.getElementById("medida").value = aux[2]
		},
		error: function(data)
		{
			console.log(data)
		}
	});
}

/*--- Descrição da função mostrarTexto() ---
	Essa função exibe o texto da tela de login do campo senha ao clicar no icone de olho.
*/
function mostrarTexto(){
	if (document.getElementById('senha').type == 'password') {
			document.getElementById('senha').type = 'text'
			var img = document.getElementById('olho')
			img.src = '_imagens/eye-slash-regular.svg'
	} else {
			document.getElementById('senha').type = 'password'
			var img = document.getElementById('olho')
			img.src = '_imagens/eye-regular.svg'
	}
}

function inserirLinhaTabela() {
	//Responsavel por pegar o valor selecionado no <select>
	let sel = document.getElementById("seletor")
	let material = sel.options[sel.selectedIndex].text
	// Captura a referência da tabela com id “minhaTabela”
	let table = document.getElementById("tabela")
	// Captura a quantidade de linhas já existentes na tabela
	let numOfRows = table.rows.length
	// Captura a quantidade de colunas da última linha da tabela
	let numOfCols = table.rows[numOfRows-1].cells.length

	// Insere uma linha no fim da tabela.
	let newRow = table.insertRow(numOfRows)

	    newCellId = newRow.insertCell(0)
			newCellMaterial = newRow.insertCell(1)
			newCellMarca = newRow.insertCell(2)
			newCellMedida = newRow.insertCell(3)
			newCellQuantidade = newRow.insertCell(4)
			newCellApagar = newRow.insertCell(5)
	    // Insere um conteúdo na coluna
	    newCellId.innerHTML = document.getElementById("id-item").value
			newCellMaterial.innerHTML = material
			newCellMarca.innerHTML = document.getElementById("marca").value
			newCellMedida.innerHTML = document.getElementById("medida").value
			newCellQuantidade.innerHTML = document.getElementById("quant").value
			newCellApagar.innerHTML = "<a title='Apagar' id='botao-apagar' onclick='removerLinha(this)' class 'bnt'><i class='far fa-times-circle'></i></a>"
}

// Função responsável em receber um objeto e extrair as informações necessárias para a remoção da linha.
function removerLinha(obj) {
	// Capturamos a referência da TR (linha) pai do objeto
	var objTR = obj.parentNode.parentNode;
	// Capturamos a referência da TABLE (tabela) pai da linha
	var objTable = objTR.parentNode;
	// Capturamos o índice da linha
	var indexTR = objTR.rowIndex;
	// Chamamos o método de remoção de linha nativo do JavaScript, passando como parâmetro o índice da linha
	objTable.deleteRow(indexTR);
}

function ano(){
	now = new Date()
	return now.getFullYear()
}

// --- FUNÇÕES JQUERY ---
{
	$(document).ready(function(){
		$('#cnpj').mask('00.000.000/0000-00', {reverse: true})
		$('#cep').mask("00.000-000", {placeholder: "00.000-000"})
		$('#tel').mask("(00) 0 0000-0000", {placeholder: "(00) 0 0000-0000"})
	});

}

// --- FIM FUNÇÕES JQUERY ---
