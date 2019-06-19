<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_model extends CI_Model {

		function editarCliente($enviar){
			var_dump($enviar);
		
		$array = array('nome_cliente' => $enviar['nome_cliente'],
			'sobrenome_cliente' => $enviar['sobrenome_cliente'],
			'cpf_cliente' => $enviar['cpf_cliente'],
			'email_cliente' => $enviar['email_cliente'],
			'senha_cliente' => $enviar['senha_cliente'] );
			
			$this->db->set($array);
			$this->db->where('id_cliente', $enviar['id_cliente']);
			$this->db->update('cadastro_clientes', $array);		
	}


	function novoCliente($novo){
		
		$array = array(
			'nome_cliente' =>($novo['nome_cliente']), 
			'sobrenome_cliente' =>($novo['sobrenome_cliente']),
			'cpf_cliente' =>($novo['cpf_cliente']),
			'email_cliente' =>($novo['email_cliente']),
			'senha_cliente' => md5($novo['senha_cliente']));

		$this->db->insert('cadastro_clientes', $array);
	}


	function getClientes(){
		$this->db->where('status', 1); 
		return $this->db->get("cadastro_clientes")->result_array();
	}

		function ofertas($novo){
		
		$array = array(
			'nome_oferta' =>($novo['nome_oferta']), 
			'email_oferta' =>($novo['email_oferta']));

		$this->db->insert('cliente_ofertas', $array);
	}

	function validar($email, $senha){

		$this->db->where('email_cliente', $email); 
        $this->db->where('senha_cliente', md5($senha));
        $this->db->where('status', 1); 

        return $this->db->get('cadastro_clientes')->result_array();
        
	}


		function excluir($id_cliente){
			$this->db->set('status', 0);
			$this->db->where('id_cliente', $id_cliente);
			$this->db->update('cadastro_clientes');		
	}

	function verificarEmail($email_cliente){
		return $this->db->query("SELECT * FROM `cadastro_clientes` WHERE email_cliente = '{$email_cliente}' LIMIT 1")->result_array();
	}

	function getUser($id_cliente){
		return $this->db->query("SELECT * FROM `cadastro_clientes` WHERE id_cliente = ".$id_cliente)->result_array();
	}

}
