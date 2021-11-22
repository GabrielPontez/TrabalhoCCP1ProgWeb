const form = document.getElementById('form');
const nome = document.getElementById('nome');
const matricula = document.getElementById('matricula');
const pri_nota = document.getElementById('pri_nota');
const seg_nota = document.getElementById('seg_nota');

form.addEventListener('submit', e => {
	e.preventDefault();
	checkInputs();
});

function checkInputs() /* function que checa todos os campos */
{
	const nomeValue = nome.value.trim();
	const matriculaValue = matricula.value.trim();
	const pri_notaValue = pri_nota.value.trim();
	const seg_notaValue = seg_nota.value.trim();
	
	if(nomeValue === '') {
		setErrorFor(nome, 'Preencha o campo corretamente!');
	} else {
		setSuccessFor(nome);
	}
	
	if(matriculaValue === '' || matricula.value.length != 9) {
		setErrorFor(matricula, 'Preencha o campo corretamente!');
	} else {
		setSuccessFor(matricula);
	}
	
	if(pri_notaValue === '') {
		setErrorFor(pri_nota, 'Preencha o campo corretamente!');
	} else {
		setSuccessFor(pri_nota);
	}
	
	if(seg_notaValue === '') {
		setErrorFor(seg_nota, 'Preencha o campo corretamente!');
	} else {
		setSuccessFor(seg_nota);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}