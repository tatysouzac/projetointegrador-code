<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('menu.php');
		$this->load->view('inicio.php');
	}

	public function categoria()
	{
		$this->load->view('menu.php');
		$this->load->view('categoria.php');
	}

	public function sobre()
	{
		$this->load->view('menu.php');
		$this->load->view('sobre.php');
	}

		public function cadastro()
	{
		$this->load->view('menu.php');
		$this->load->view('cadastro.php');
	}

	public function login()
	{
		$this->load->view('menu.php');
		$this->load->view('login.php');
	}

	public function receber_cliente(){
		
		$nome = $_POST["nome_cliente"];
		$sobrenome = $_POST["sobrenome_cliente"];
		$cpf = $_POST["cpf_cliente"];
		$email = $_POST["email_cliente"];
		$senha = $_POST["senha_cliente"];
		$this->load->model("Cadastro_model");
		$this->Cadastro_model->novoCliente($_POST);
		header('Location: http://localhost/integradorcode/index.php/welcome/index');

	}

	public function cliente_oferta(){
		
		$nome = $_POST["nome_oferta"];
		$email = $_POST["email_oferta"];
		$this->load->model("Cadastro_model");
		$this->Cadastro_model->ofertas($_POST);
	}

	public function validar(){
		$this->load->model("Cadastro_model");

		$result = $this->Cadastro_model->validar($_POST["email"], $_POST["senha"]);

	
		if(!empty($result)){

		$this->load->view('menu.php');
		$this->load->view('inicio.php');


		}else{

			$this->session->set_flashdata("danger", "Usuario ou senha incorreto!");
			header('Location: http://localhost/integradorcode/index.php/welcome/login');

		}
			
	}

	public function listar(){

			$this->load->model("Cadastro_model");
			$result = $this->Cadastro_model->getClientes();

			$dados = array( 'cadastro_clientes' => $result );
			$this->load->view("menu.php");
			$this->load->view("mostrar", $dados);	
		
	} 

	public function excluir($id_cliente){
		$this->load->model("Cadastro_model");
		$this->Cadastro_model->excluir($id_cliente);
		header('Location: http://localhost/integradorcode/index.php/welcome/listar');


	}

		public function editar($id_cliente){

			echo $id_cliente;
			
			$this->load->model("Cadastro_model");
		
			$result = $this->Cadastro_model->getUser($id_cliente);

			$id_cliente = $result[0]['id_cliente'];
			$nome_cliente = $result[0]['nome_cliente'];
			$sobrenome_cliente = $result[0]['sobrenome_cliente'];
			$cpf_cliente = $result[0]['cpf_cliente'];
			$email_cliente= $result[0]['email_cliente'];
			$senha_cliente = $result[0]['senha_cliente'];

			$dados = array( 'id_cliente' => $id_cliente,'nome_cliente' => $nome_cliente, 'sobrenome_cliente' => $sobrenome_cliente, 'cpf_cliente' => $cpf_cliente,'email_cliente' => $email_cliente, 'senha_cliente' => $senha_cliente);

			$this->load->view("menu");
			$this->load->view("editar", $dados);
		}

		public function enviar_editar(){

			var_dump($_POST);

			$id_cliente =$_POST["id_cliente"];
			$nome = $_POST["nome_cliente"];
			$sobrenome = $_POST["sobrenome_cliente"];
			$cpf = $_POST["cpf_cliente"];
			$email = $_POST["email_cliente"];
			$senha = $_POST["senha_cliente"];

			$this->load->model("Cadastro_model");
			$this->Cadastro_model->editarCliente($_POST);
			header('Location: http://localhost/integradorcode/index.php/welcome/listar');

		}

		
}


