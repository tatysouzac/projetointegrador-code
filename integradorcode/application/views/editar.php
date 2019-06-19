<center>
<h1>
</h1>

	<div id="container">

		<form action='http://localhost/integradorcode/index.php/welcome/enviar_editar' method='post'>

			
			<input type="hidden" name="id_cliente" value="<?= isset($id_cliente) ? $id_cliente : "" ?>">

			<input type="text" name="nome_cliente" placeholder="Nome" value="<?= isset($nome_cliente) ? $nome_cliente : "" ?>">
			</br>
			<input type="text" name="sobrenome_cliente" placeholder="Some" value="<?= isset($sobrenome_cliente) ? $sobrenome_cliente : "" ?>" required>
			</br>			
			<input type="text" name="cpf_cliente" placeholder="CPF" value="<?= isset($cpf_cliente) ? $cpf_cliente : "" ?>" required>
			</br>
			<input type="text" name="email_cliente" placeholder="Email" value="<?= isset($email_cliente) ? $email_cliente : "" ?>" required>
			</br>
			<input type="password" name="senha_cliente" placeholder="Senha" value="<?= isset($senha_cliente) ? $senha_cliente : "" ?>">

			</br><input type="submit" name="btn_enviar" value="Editar">
		</form>
	</div>
</center>

</body>
</html>