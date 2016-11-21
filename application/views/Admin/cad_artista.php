<?php include('includes/header.php')?>
<?php include('includes/nav.php')?>
<main id="content">
    <form class="form-horizontal" action="<?=base_url('recortar')?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">
                        Nome do artista ou grupo:
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="senha" class="col-sm-2 control-label">
                        Senha:
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="senha" id="senha" required>
                    </div>
                </div>
            
                <div class="form-group">
                    <label for="categoria" class="col-sm-2 control-label">
                        Selecione uma categoria:
                    </label>
                    <div class="col-sm-10">
                      <select  class="form-control" name="categoria" id="categoria">
                        <?php foreach($cats as $cat){ echo "<option value=".$cat->cd_categoria.">".$cat->nm_categoria."</option>"; } ?>
                      </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">
                        Email:
                    </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="telefone" class="col-sm-2 control-label">
                        Telefone:
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="telefone" id="telefone" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="site" class="col-sm-2 control-label">
                        Site:
                    </label>
                    <div class="col-sm-10">
                        <input type="url" class="form-control" name="site" id="site">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="redes" class="col-sm-2 control-label">
                        Rede social de maior relevancia:
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="redes" id="redes" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="descricao" class="col-sm-2 control-label">
                        Breve descrição (release):
                    </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="descricao"></textarea>
                    </div>
                </div>
                
                
                <div>
                    <div>
                        <?php if(isset($error)):?>
                            <div><?=$error?></div>
                        <?php endif; ?>
                            <div class="form-group">
                                <label for="descricao" class="col-sm-2 control-label">
                                    <label>Selecione uma imagem em formato jpg ou png</label>
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="imagem" id="seleciona-imagem"/>
                                </div>
                            </div>
                    </div>
                    <div>
                        <div id="imagem-box">
                            <p>Selecione a imagem a ser cortada</p>
                            <img src="" style="display:none;width:50%;" id="visualizacao_img" />
                        </div>
                        <input type="hidden" id="x" name="x" />
                        <input type="hidden" id="y" name="y" />
                        <input type="hidden" id="wcrop" name="wcrop" />
                        <input type="hidden" id="hcrop" name="hcrop" />
                        <input type="hidden" id="wvisualizacao" name="wvisualizacao" />
                        <input type="hidden" id="hvisualizacao" name="hvisualizacao" />
                        <input type="hidden" id="woriginal" name="woriginal" />
                        <input type="hidden" id="horiginal" name="horiginal" />
                        <div>
                            <input type="submit" value="Cadastrar" id="recortar-imagem"/>
                        </div>
                        </form>
                    </div>

<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.Jcrop.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/scripts.js"></script>
</main>
</div>

<?php include('includes/footer.php')?>