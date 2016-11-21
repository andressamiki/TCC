<?php

class Evento{

    public $nm_evento, $ds_evento,$cd_categoria,$cd_artista, $ds_data,$ds_hora, $ds_local, 
    $ds_classificacao,$imagem,$preco;
    
    public function __construct($nm_evento, $ds_evento,$cd_categoria,$cd_artista, 
    $ds_data,$ds_hora, $ds_local, $ds_classificacao,$imagem,$preco){
    
        $this->nm_evento = $nm_evento;
        $this->ds_evento = $ds_evento;
        $this->cd_categoria = $cd_categoria;
        $this->cd_artista = $cd_artista;
        $this->ds_data = $ds_data;
        $this->ds_hora = $ds_hora;
        $this->ds_local = $ds_local;
        $this->ds_classificacao = $ds_classificacao;
        $this->imagem = $imagem;
        $this->preco=$preco;
    }
    
}