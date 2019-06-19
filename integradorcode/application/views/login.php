			
			<div id="corpo">

			<?php if($this->session->flashdata("danger")){?>
				<p><?= $this->session->flashdata("danger");?></p>
			<?php }?>

			<br><br><br><br>
			
			<center>		 
				<h1>LOGIN</h1>	
				
					<table  id="loginBox" border = "2">
					
						<td align = "center">
							<div>
							
								
								<a href="login.php" class="myButton">Usuario</a>
								<a href="loginADM.php" class="myButton">Administrador</a>
								<a href="loginVEND.php" class="myButton">Vendedor</a><br><br><br><br>
									
							
							</div>	
							<div>							
									<form method="post" action="http://localhost/integradorcode/index.php/welcome/validar">
									EMAIL: <input type="text" name="email"  /> <br><br>
									SENHA:  <input type="password" name="senha"/> <br><br><br><br>
									<input class="myButton" type="submit" value="Entrar"/> <br><br>
									</form>
									<a href="Cadastro.php" class="myButton">Cadastrar</a><br><br>
									<a href="#" class="myButton">Esqueceu sua senha?</a>
							</div>
						</td>	
					</table>
				
				
			</center>
	
	
			</div>
			<div id="rodape">

<table>
			<tr>
			</br>
			</tr>
			<tr>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-06-12/204_nike.png" alt="">
			</td>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-10-10/2918_adidas.png" alt="">
			</td>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-11-05/1918_puma.png" alt="">
			</td>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-09-27/8918_mizuno.png" alt="">
			</td>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-06-12/2338_olimpikus.png" alt="">
			</td>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-06-12/188_new_balance.png" alt="">
			</td>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-06-12/1214_gonew.png" alt="">
			</td>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-06-12/1476_under.png" alt="">
			</td>
			</tr>
			</table>
			
			</div>
	
	
	</body>

</html>