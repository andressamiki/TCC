<?php
// esta classe é filha de um model
    class Model extends CI_Model{
        
        public function insert (Contato $cont){
            $this->db->insert('Contatos',$cont);
        }
        
        public function insertCat (Categoria $cont){
            $this->db->insert('Categorias',$cont);
        }
        
        public function insertEvent (Evento $cont){
            $this->db->insert('Eventos',$cont);
        }
        
        public function getid(){
            return $this->db->insert_id();
        }
        
        public function searchAllCat(){
            $this->db->from('Categorias');
            $query = $this->db->get(); 
            return $query->result();
        }
        
        public function searchEmailDuplicado($email){
            $this->db->where("ds_email",$email);
            $a=$this->db->get('Usuarios');
            
            if ($a->num_rows()>0){
                return $a;
                }else{
                return false;
            }
        }
        
        
        public function searchEvent($id){
            $this->db->from('Eventos');
            $this->db->where("cd_artista",$id);
            $this->db->order_by("nm_evento", "asc");
            $query = $this->db->get(); 
            return $query->result();
        }
    
        public function searchAllArt0(){
            $this->db->from('Artistas');
            $this->db->where("status",0);
            $this->db->order_by("nm_artista", "asc");
            $query = $this->db->get(); 
            return $query->result();
        }        
        
        public function searchAllArt1(){
            $this->db->from('Artistas');
            $this->db->where("status",1);
            $this->db->order_by("nm_artista", "asc");
            $query = $this->db->get(); 
            return $query->result();
        }
        
        
        public function deletarArt($id){
            $tables = array('Usuarios', 'Artistas');
            $this->db->where('cd_usuario', $id);
            $this->db->delete($tables);
        }
        
        public function deletarArtEvent($id){
            $this->db->where('cd_artista', $id);
            $this->db->delete('Eventos');
        }
        
        public function deletarEvent($id){
            $this->db->where('cd_evento', $id);
            $this->db->delete('Eventos');
        }
        
        
        public function aprovarArt($id){
            $this->db->set('status','1');
            $this->db->where('cd_usuario',$id);
            $this->db->update('Artistas');
        }
        
        
        public function imagemArt($id,$imagem){
            $this->db->set('foto',$imagem);
            $this->db->where('cd_artista',$id);
            $this->db->update('Artistas');
        }
        
        
        public function insertArtista (Artista $cont){
            $data1['ds_email'] = $cont->ds_email;
            $data1['ds_senha'] = $cont->ds_senha;
            $data1['tipo'] = 0;
            $data1['ds_telefone'] = $cont->ds_telefone;
            
            $this->db->insert('Usuarios',$data1);
            $data['status'] = 1;
            $data['nm_artista'] = $cont->nm_artista;
            $data['ds_artista'] = $cont->ds_artista;
            $data['cd_usuario'] = self::getid();
            $data['cd_categoria'] = $cont->cd_categoria;
            $data['foto'] = $cont->foto;
            $data['ds_site'] = $cont->ds_site;
            $data['ds_redes'] = $cont->ds_redes;
            $this->db->insert('Artistas',$data);
        }
        
        public function insertArtista2 (Artista $cont){
            $data1['ds_email'] = $cont->ds_email;
            $data1['ds_senha'] = $cont->ds_senha;
            $data1['tipo'] = 0;
            $data1['ds_telefone'] = $cont->ds_telefone;
            
            $this->db->insert('Usuarios',$data1);
            $data['status'] = 0;
            $data['nm_artista'] = $cont->nm_artista;
            $data['ds_artista'] = $cont->ds_artista;
            $data['cd_usuario'] = self::getid();
            $data['cd_categoria'] = $cont->cd_categoria;
            $data['foto'] = $cont->foto;
            $data['ds_site'] = $cont->ds_site;
            $data['ds_redes'] = $cont->ds_redes;
            $this->db->insert('Artistas',$data);
        }
        
        public function getidArista($id){
            $this->db->where("cd_usuario",$id);
            $a= $this->db->get('Artistas');
            return $a->row()->cd_artista;
        }
        
        public function getidUser($email){
            $this->db->where("ds_email",$email);
            $a= $this->db->get('Usuarios');
            return $a->row()->cd_usuario;
        }
        
        public function getUser($email,$senha) {
            $this->db->where("ds_email",$email);
            $this->db->where("ds_senha",$senha);
            $a=$this->db->get('Usuarios');
            
            $this->db->where("cd_usuario",$a->row()->cd_usuario);
            $b=$this->db->get('Artistas');
            
            if ($a->num_rows()>0){
                if($a->row()->tipo === "0" && $b->row()->status === "1"){
                    return ("artista");
                }else if($a->row()->tipo === "1"){
                    return ("produtor");
                }else if($a->row()->tipo === "5"){
                    return("admin");
                }
                }else{
                return false;
            }
        }
        
        
}
    

    