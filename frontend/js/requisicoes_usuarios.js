var host = 'http://localhost/Testes/trab_vitor/backend/api';
window.onload = function(e) {
	
	fetch(host + '/users/get_usuarios.php',{}).then(response => response.json())				
	.then(data => { 
		console.log(data);
		data.forEach(usuario => {  
			var table = document.getElementById("dataTable");
			var row = table.insertRow(-1);
			var idColuna = row.insertCell(0);
			var nomeColuna = row.insertCell(1); 
            var emailColuna = row.insertCell(2); 
            var dataColuna = row.insertCell(3); 
			idColuna.innerHTML = usuario.id;
			nomeColuna.innerHTML = usuario.nome;
            emailColuna.innerHTML = usuario.email;
            dataColuna.innerHTML = usuario.data_cadastro;
		})
	}).catch(error => console.error(error))
}

/* function adicionarPessoa(){
	document.getElementById('formPessoa').style.display="block"
} */

function enviarForm() {
	var form = document.getElementById('adicionarUsuario');
	var data = {};
	data['nome'] = form.nome.value 
	data['email'] = form.email.value;
	
	fetch(host + '/users/post_usuario.php', {
		method: 'POST',       
		body: JSON.stringify(data)
	})
	.then((response) => {
		if (response.ok) {
			return response.json() 
		} else {
			return Promise.reject({ status: res.status, statusText: res.statusText });
		}   

	})
	.then((data) => console.log(data))
	.catch(err => console.log('Error message:', err.statusText));
}