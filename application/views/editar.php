
	<div id="corpo">
		<br><br><br><br>
			
		<center>

		<h1>Editar</h1>
		<table  id="cadastroBox" border = "2">
		<td align = "center">

		<form action='http://localhost/integradorcode/index.php/welcome/enviar_editar' method='post'>

			
			<input type="hidden" name="id_cliente" value="<?= isset($id_cliente) ? $id_cliente : "" ?>">
			NOME <br>
			<input type="text" name="nome_cliente" placeholder="Nome" value="<?= isset($nome_cliente) ? $nome_cliente : "" ?>">
			</br>
			SOBRENOME <br>
			<input type="text" name="sobrenome_cliente" placeholder="Some" value="<?= isset($sobrenome_cliente) ? $sobrenome_cliente : "" ?>" required>
			</br>
			CPF <br>			
			<input type="text" name="cpf_cliente" placeholder="CPF" value="<?= isset($cpf_cliente) ? $cpf_cliente : "" ?>" required>
			</br>
			EMAIL <br>
			<input type="text" name="email_cliente" placeholder="Email" value="<?= isset($email_cliente) ? $email_cliente : "" ?>" required>
			</br>
			SENHA <br>
			<input type="password" name="senha_cliente" placeholder="Senha" value="<?= isset($senha_cliente) ? $senha_cliente : "" ?>">

			</br><input type="submit" class="myButton" name="btn_enviar" value="Editar">
		</form>
	</div>
</center>

</body>
</html>