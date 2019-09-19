<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pessoa extends CI_Controller {
	public function index()
	{
        // carregar a model
        $this->load->model('pessoa_model');
        // echo '<pre>';
        // print_r($this->user_model->getUsers(2));
        // echo '</pre>';
        
        $data['usuarios'] = $this->user_model->getUsers();
        $data['cor'] = 'gray';
		$this->load->view('usuario', $data);
    }
    
    // cadastrar
    public function cadastrar()
    {
        $data['titulo'] = 'Cadastrar Usuário';
        $data['edita']  = false;
        $data['acao']   = 'cadastra';
        
        $this->load->view('usuario-form', $data);
    }
    // editar
    public function editar()
    {
        // carregar a model
        $this->load->model('user_model');
        // recupera o parametro
        $id = $_GET['id'];
        // alimenta o array que vai pra view
        $data['titulo'] = 'Editar Usuário';
        $data['edita']  = true;
        $data['usuario'] = $this->user_model->getUsers($id);
        $data['acao']   = 'edita';
        $this->load->view('usuario-form', $data);
    }
    // efetua cadastro 
    public function cadastra()
    {
        $data = [
            'nome'  => $_POST['nome'],
            'email' => $_POST['email'],
        ];
        // carregar a model
        $this->load->model('user_model');
        $this->user_model->insere($data); 
        $this->index();
    }
    // efetua editação
    public function edita()
    {
        $data = [
            'id'   => $_POST['id'],
            'nome'  => $_POST['nome'],
            'email' => $_POST['email'],
        ];
        // carregar a model
        $this->load->model('user_model');
        $this->user_model->altera($data); 
        $this->index();
    }
}