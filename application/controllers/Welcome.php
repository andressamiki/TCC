<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function index()
    {
	$this->load->view('index');
	}
	
	public function sobre()
	{
		$this->load->view('sobre');
	}
	
	public function eventos()
	{
		$this->load->view('eventos');
	}
	
	
	public function getmodel()
	{
    	$this->load->model('model');
		$m = $this->model;
		return $m;
    }
    
	
	public function formartista()
	{
		require_once APPPATH."models/categoria.php";
		$m = $this->getmodel();
		$cont = $m->searchAllCat();
		$data['cats'] = $cont;
		$this->load->view('formartista',$data);
	}
	
	public function enviaformartista()
	{
		require_once APPPATH."models/usuario.php";
		$m = $this->getmodel();
		$m->insertArtista2(new Artista($_POST['email'],md5($_POST['senha']),$_POST['telefone'],$_POST['site'],$_POST['redes'],$_POST['nome'],$_POST['descricao'],$_POST['categoria']));
	}
	
	
	public function danca()
	{
		$this->load->view('danca');
	}
	
	
	public function querodivulgar()
	{
		$this->load->view('querodivulgar');
	}
	public function teatro()
	{
		$this->load->view('teatro');
	}
	
	public function musica()
	{
		$this->load->view('musica');
	}
	
	public function artesedesign()
	{
		$this->load->view('artesedesign');
	}
	
	public function artistas()
	{
		$this->load->view('artista');
	}
	
	public function contato()
	{
		$this->load->view('contato');
	}
	
		public function login()
	{
		$this->load->view('login');
	}
	
    
	public function doPost()
	{
		require_once APPPATH."models/contato.php";
		$m = $this->getmodel();
		$m->insert(new Contato($_POST['nome'],$_POST['email'],$_POST['mensagem']));
	}
	
	public function valida(){
    	$email = $_POST["email"];
        $senha = $_POST["key"];
        $this->load->model("model");
        $usr = $this->model->getUser($email,md5($senha));
        if($usr !== false){
            if($usr === "artista"){
             	$this->session->set_userdata("_ID", "artista"); 
             	$this->session->set_userdata("_EMAIL", $email);
             	redirect("cadastro-evento-artista"); 
        	}else{
        		$this->session->set_userdata("_ID", "admin");
        		$this->session->set_userdata("_EMAIL", $email);
        		redirect("/cadastro-artista");
        	}
        }else{
            redirect("index");
        }
    }
    

	
}
