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
			console.log(data);
		}
	});
}

/*--- Descrição da função mostrarTexto() ---
	Essa função exibe o texto da tela de login do campo senha ao clicar no icone de olho.
*/
function mostrarTexto(){
	if (document.getElementById('senha').type == 'password') {
			document.getElementById('senha').type = 'text';
			var img = document.getElementById('olho');
			img.src = '_imagens/eye-slash-regular.svg';
	} else {
			document.getElementById('senha').type = 'password';
			var img = document.getElementById('olho');
			img.src = '_imagens/eye-regular.svg';
	}
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
