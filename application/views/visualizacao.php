
<script></script>


<div>
    <div>
        <h3>Imagem Recortada</h3>
        <hr />
        <div>
            <img src="<?=$this->session->flashdata('urlImagem')?>"/>
        </div>
        <p><a href="<?=base_url()?>">Nova Imagem</a></p>
    </div>
    <?php if($this->session->flashdata('dadosImagem') == TRUE): ?>
    <div>
        <h3>Informações da Imagem</h3>
        <hr />
        <ul>
            <?php foreach($this->session->flashdata('dadosImagem') as $key => $value): ?>
            <li><strong><?=$key?></strong> => <?=$value?></li>
            <?php endforeach; ?>
        </ul>
        <hr/>
        <h3>Informações do Recorte</h3>
        <hr />
        <ul>
            <?php foreach($this->session->flashdata('dadosCrop') as $key => $value): ?>
            <li><strong><?=$key?></strong> => <?=$value?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>
</div>






<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.Jcrop.js"></script>
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/scripts.js"></script>