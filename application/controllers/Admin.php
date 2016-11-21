<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        // Carrega as libraries necessárias: session, upload e image_lib
        $this->load->library(['session','upload','image_lib']);
    }
    
    
    public function imagem()
    {
        // Exibe a view com os dados da imagem recortada
        $this->load->view('home');
    }
    
    public function sucessoaproevento(){
        $this->load->view('Admin/sucessoaproevento');
    }
    
    public function sucessoexcluirevento()
    {
        // Exibe a view com os dados da imagem recortada
        $this->load->view('Admin/sucessoexcluirevento');
    }
    
    
    public function visualizacao()
    {
        // Exibe a view com os dados da imagem recortada
        $this->load->view('visualizacao');
    }
 
    // Executa o processo de recorte da imagem
    public function recortar(){
 
        // Configurações para o upload da imagem
        // Diretório para gravar a imagem
        $configUpload['upload_path']   = './uploads/';
        // Tipos de imagem permitidos
        $configUpload['allowed_types'] = 'jpg|png';
        // Usar nome de arquivo aleatório, ignorando o nome original do arquivo
        $configUpload['encrypt_name']  = TRUE;
 
        // Aplica as configurações para a library upload
        $this->upload->initialize($configUpload);
 
        // Verifica se o upload foi efetuado ou não
        // Em caso de erro carrega a home exibindo as mensagens
        // Em caso de sucesso faz o processo de recorte
        if ( ! $this->upload->do_upload('imagem'))
        {
            // Recupera as mensagens de erro e envia o usuário para a home
            $data= array('error' => $this->upload->display_errors());
            $this->load->view('home',$data);
        }
        else
        {
            // Recupera os dados da imagem
            $dadosImagem = $this->upload->data();
 
            // Calcula os tamanhos de ponto de corte e posição
            // de forma proporcional em relação ao tamanho da
            // imagem original
            $tamanhos = $this->CalculaPercetual($this->input->post());
 
            // Define as configurações para o recorte da imagem
            // Biblioteca a ser utilizada
            $configCrop['image_library'] = 'gd2';
            //Path da imagem a ser recortada
            $configCrop['source_image']  = $dadosImagem['full_path'];
            // Diretório onde a imagem recortada será gravada
            $configCrop['new_image']     = './uploads/crops/';
            // Proporção
            $configCrop['maintain_ratio']= FALSE;
            // Qualidade da imagem
            $configCrop['quality']             = 100;
            // Tamanho do recorte
            $configCrop['width']         = $tamanhos['wcrop'];
            $configCrop['height']        = $tamanhos['hcrop'];
            // Ponto de corte (eixos x e y)
            $configCrop['x_axis']        = $tamanhos['x'];
            $configCrop['y_axis']        = $tamanhos['y'];
 
            // Aplica as configurações para a library image_lib
            $this->image_lib->initialize($configCrop);
 
            // Verifica se o recorte foi efetuado ou não
            // Em caso de erro carrega a home exibindo as mensagens
            // Em caso de sucesso envia o usuário para a tela
            // de visualização do recorte
            if ( ! $this->image_lib->crop())
            {
                // Recupera as mensagens de erro e envia o usuário para a home
                $data = array('error' => $this->image_lib->display_errors());
                $this->load->view('home',$data);
            }
            else
            {
                // Define a URL da imagem gerada após o recorte
                $urlImagem = base_url('uploads/crops/'.$dadosImagem['file_name']);
 
                // Grava a informação na sessão
                $this->session->set_flashdata('urlImagem', $urlImagem);
 
                // Grava os dados da imagem recortada na sessão
                $this->session->set_flashdata('dadosImagem', $dadosImagem);
 
                // Grava os dados da imagem original na sessão
                $this->session->set_flashdata('dadosCrop', $tamanhos);
                
		        
		        require_once APPPATH."models/usuario.php";
        		$m = $this->getmodel();
        		$b = $m->searchEmailDuplicado($_POST['email']);
        		if ( $b == false){
        		    $m->insertArtista(new Artista($_POST['email'],md5($_POST['senha']),$_POST['telefone'],$_POST['nome'],$_POST['descricao'],$_POST['categoria'],$this->session->flashdata('urlImagem'),$_POST['site'],$_POST['redes']));
        		    $this->session->set_userdata('_emailartista', $_POST['email']);
        		    redirect('/evento-aprovado');
        		    echo  "cadastrado com sucesso";
        		    
        		}else{
        		    echo "ERRO, email duplicado";
        		}
        		
            }
        }
    }
 
 
 
 
    // Método privado responsável por calcular os tamanhos de forma proporcional
    private function calculaPercetual($dimensoes){
        // Verifica se a largura da imagem original é
        // maior que a da área de recorte, se for calcula o tamanho proporcional
        if($dimensoes['woriginal'] > $dimensoes['wvisualizacao']){
            $percentual = $dimensoes['woriginal'] / $dimensoes['wvisualizacao'];
 
            $dimensoes['x'] = round($dimensoes['x'] * $percentual);
            $dimensoes['y'] = round($dimensoes['y'] * $percentual);
            $dimensoes['wcrop'] = round($dimensoes['wcrop'] * $percentual);
            $dimensoes['hcrop'] = round($dimensoes['hcrop'] * $percentual);
        }
 
        // Retorna os valores a serem utilizados no processo de recorte da imagem
        return $dimensoes;
    }
    
    public function cad_artista()
	{
		require_once APPPATH."models/categoria.php";
		$m = $this->getmodel();
		$cont = $m->searchAllCat();
		$data['cats'] = $cont;
		$this->load->view('Admin/cad_artista',$data);
		
	}
	
	public function cad_categoria()
	{
		
		$this->load->view('Admin/cad_categoria');
	}
	
	public function aprovacao()
	{
		require_once APPPATH."models/usuario.php";
		$m = $this->getmodel();
		$cont2 = $m->searchAllArt0();
		$data['arts'] = $cont2;
		$this->load->view('Admin/apr_artista',$data);
	}
	
	
	public function gerenciarArtista()
	{
		require_once APPPATH."models/usuario.php";
		$m = $this->getmodel();
		$cont2 = $m->searchAllArt1();
		$data['arts'] = $cont2;
		$this->load->view('Admin/ger_artista',$data);
	}
	
	public function gerenciarEventoId()
	{
		require_once APPPATH."models/evento.php";
		$m = $this->getmodel();
		$id = $_POST['artista'];
		$this->gerenciarEventoId2($id);
		
	}
	
	public function gerenciarEventoId2($id){
		require_once APPPATH."models/evento.php";
		$m = $this->getmodel();
		$cont2 = $m->searchEvent($id);
		$data['events'] = $cont2;
		$this->load->view('Admin/ger_evento_id',$data);
	}
	
	
	public function gerenciarEvento()
	{
		require_once APPPATH."models/categoria.php";
		$m = $this->getmodel();
		$cont2 = $m->searchAllArt1();
		$data['artista'] = $cont2;
		$this->load->view('Admin/ger_evento',$data);
	}
	
	public function deletar($id)
	{
		
		require_once APPPATH."models/usuario.php";
		$m = $this->getmodel();
		$cont3 = $m->deletarArtEvent($m->getidArista($id));
		$cont2 = $m->deletarArt($id);
		
		redirect('/gerenciar-artista');
		
	}
	
	public function deletarEvent($id,$user)
	{
		
		require_once APPPATH."models/usuario.php";
		$m = $this->getmodel();
		$cont2 = $m->deletarEvent($id);
		redirect('/evento-excluido');
		
	}
	
	public function aprovar($id)
	{
		
		require_once APPPATH."models/usuario.php";
		$m = $this->getmodel();
		$cont2 = $m->aprovarArt($id);
		$this->aprovacao();
	}
	
	public function cad_evento()
	{
		require_once APPPATH."models/categoria.php";
		$m = $this->getmodel();
		$cont = $m->searchAllCat();
		$cont2 = $m->searchAllArt1();
		$data['cats'] = $cont;
		$data['artista'] = $cont2;
		$this->load->view('Admin/cad_evento',$data);
	}
	
	public function getmodel()
	{
    	$this->load->model('model');
		$m = $this->model;
		return $m;
    }
	
	public function categoria()
	{
		require_once APPPATH."models/categoria.php";
		$m = $this->getmodel();
		$m->insertCat(new Categoria($_POST['nome'],$_POST['descricao']));
	}
	
	public function artista()
	{
    	
	}
	
	public function evento()
	{
	    // Configurações para o upload da imagem
        // Diretório para gravar a imagem
        $configUpload['upload_path']   = './uploads/';
        // Tipos de imagem permitidos
        $configUpload['allowed_types'] = 'jpg|png';
        // Usar nome de arquivo aleatório, ignorando o nome original do arquivo
        $configUpload['encrypt_name']  = TRUE;
 
        // Aplica as configurações para a library upload
        $this->upload->initialize($configUpload);
 
        // Verifica se o upload foi efetuado ou não
        // Em caso de erro carrega a home exibindo as mensagens
        // Em caso de sucesso faz o processo de recorte
        if ( ! $this->upload->do_upload('imagem'))
        {
            // Recupera as mensagens de erro e envia o usuário para a home
            $data= array('error' => $this->upload->display_errors());
            $this->load->view('home',$data);
        }
        else
        {
            // Recupera os dados da imagem
            $dadosImagem = $this->upload->data();
 
            // Calcula os tamanhos de ponto de corte e posição
            // de forma proporcional em relação ao tamanho da
            // imagem original
            $tamanhos = $this->CalculaPercetual($this->input->post());
 
            // Define as configurações para o recorte da imagem
            // Biblioteca a ser utilizada
            $configCrop['image_library'] = 'gd2';
            //Path da imagem a ser recortada
            $configCrop['source_image']  = $dadosImagem['full_path'];
            // Diretório onde a imagem recortada será gravada
            $configCrop['new_image']     = './uploads/crops/';
            // Proporção
            $configCrop['maintain_ratio']= FALSE;
            // Qualidade da imagem
            $configCrop['quality']             = 100;
            // Tamanho do recorte
            $configCrop['width']         = $tamanhos['wcrop'];
            $configCrop['height']        = $tamanhos['hcrop'];
            // Ponto de corte (eixos x e y)
            $configCrop['x_axis']        = $tamanhos['x'];
            $configCrop['y_axis']        = $tamanhos['y'];
 
            // Aplica as configurações para a library image_lib
            $this->image_lib->initialize($configCrop);
 
            // Verifica se o recorte foi efetuado ou não
            // Em caso de erro carrega a home exibindo as mensagens
            // Em caso de sucesso envia o usuário para a tela
            // de visualização do recorte
            if ( ! $this->image_lib->crop())
            {
                // Recupera as mensagens de erro e envia o usuário para a home
                $data = array('error' => $this->image_lib->display_errors());
                $this->load->view('home',$data);
            }
            else
            {
                // Define a URL da imagem gerada após o recorte
                $urlImagem = base_url('uploads/crops/'.$dadosImagem['file_name']);
 
                // Grava a informação na sessão
                $this->session->set_flashdata('urlImagem', $urlImagem);
 
                // Grava os dados da imagem recortada na sessão
                $this->session->set_flashdata('dadosImagem', $dadosImagem);
 
                // Grava os dados da imagem original na sessão
                $this->session->set_flashdata('dadosCrop', $tamanhos);
        
		        require_once APPPATH."models/evento.php";
		        $m = $this->getmodel();
		        $m->insertEvent(new Evento($_POST['nome'],$_POST['descricao'],$_POST['categoria'],$_POST['artista'],$_POST['data'],$_POST['hora'],$_POST['local'],$_POST['classificacao'],$this->session->flashdata('urlImagem'),$_POST['preco']));
		        redirect('/evento-aprovado');
            }
        }            
    }
	
	public function logout(){
        $this->session->unset_userdata("_ID");
        $this->session->unset_userdata("_EMAIL");
        redirect("/index");
    }
    
}