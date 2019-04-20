function olho(){
    document.getElementById('olho').addEventListener('click', function() {
        if (document.getElementById('senha').type == 'password') {
            document.getElementById('senha').type = 'text';
            var img = document.getElementById('img-olho');
            img.src = '_imagens/olho-fechado.svg';
        } else {
            document.getElementById('senha').type = 'password';
            var img = document.getElementById('img-olho');
            img.src = '_imagens/olho-aberto.svg';
        }   
    });
}
