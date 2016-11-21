<?php

class Categoria{

    public $nm_categoria, $ds_categoria;
    
    public function __construct($nm_categoria, $ds_categoria){
        $this->nm_categoria = $nm_categoria;
        $this->ds_categoria = $ds_categoria;
    }
    
}