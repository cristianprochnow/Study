function mudaFoto (foto) {
		document.getElementById('icone').src = foto;
}	

function calc_total () {
	var qtd = parseInt(document.getElementById('cQuant').value);
    tot = qtd * 1500;
    document.getElementById('cValor').value = tot;
}