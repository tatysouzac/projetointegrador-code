<center>
	<table>
		<th>ID</th>
		<th>Nome</th>
		<th>Sobrenome</th>
		<th>CPF</th>
		<th>Email</th>
		<th>Senha</th>
		<th>&nbsp;</th>
		<th>&nbsp;</th>
	<?php foreach ($cadastro_clientes as $clientes) {		?>

		<tr>
			<td>
				#<?= $clientes['id_cliente'] ?>
			</td>
			<td>
				<?= $clientes['nome_cliente'] ?>
			</td>
			<td>
				<?= $clientes['sobrenome_cliente'] ?>
			</td>
			<td>
				<?= $clientes['cpf_cliente'] ?>
			</td>
			<td>
				<?= $clientes['email_cliente'] ?>
			</td>
			<td>
				<?= $clientes['senha_cliente'] ?>
			</td>
			<td>

			<a href="http://localhost/integradorcode/index.php/welcome/editar/<?= $clientes['id_cliente'] ?>">
					<input type="button" name="editar" value="editar" class="myButton">
				</a>
			</td>
			<td>
				<a href="http://localhost/integradorcode/index.php/welcome/excluir/<?= $clientes['id_cliente'] ?>">
					<input type="button" name="excluir" value="excluir" class="myButton">
				</a>
			</td>
		</tr>
	<?php } ?>
	</table>
</center>









