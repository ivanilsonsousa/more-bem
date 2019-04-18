function preenche(){
	var indice = document.getElementById("seletor").selectedIndex;
    
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

function olho(){
	document.getElementById('olho').addEventListener('mousedown', function() {
	document.getElementById('senha').type = 'text';
	var img = document.getElementById('olho');
	img.src = '_imagens/olho-aberto12.png';
	});

	document.getElementById('olho').addEventListener('mouseup', function() {
	document.getElementById('senha').type = 'password';
	var img = document.getElementById('olho');
	img.src = '_imagens/olho-fechado12.png';
	});

	// Para que o password não fique exposto apos mover a imagem.
	document.getElementById('olho').addEventListener('mousemove', function() {
	  document.getElementById('senha').type = 'password';
	});
}