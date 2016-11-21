<?php

class Usuario{

    public $ds_email, $ds_senha,$telefone;
    
    public function __construct($ds_email,$ds_senha,$ds_telefone){
        $this->ds_email = $ds_email;
        $this->ds_senha = $ds_senha;
        $this->ds_telefone = $ds_telefone;
    }
    
}


class Artista extends Usuario{
    public $nm_artista, $ds_artista,$cd_categoria,$foto,$ds_site,$ds_redes;
    
    public function __construct($ds_email,$ds_senha,$ds_telefone,$nm_artista, $ds_artista,$cd_categoria,$foto,$ds_site,$ds_redes){
        parent::__construct($ds_email,$ds_senha,$ds_telefone);
        $this->nm_artista = $nm_artista;
        $this->ds_artista = $ds_artista;
        $this->cd_categoria = $cd_categoria;
        $this->ds_site = $ds_site;
        $this->ds_redes = $ds_redes;
        $this->foto = $foto;
        
        
    }
}




    