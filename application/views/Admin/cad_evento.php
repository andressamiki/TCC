<?php include('includes/header.php')?>
<?php include('includes/nav.php')?>
<main class="" id="content">
    <form action="/index.php/Admin/evento" method="POST" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Nome da evento</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="" name="nome">  
        </div>
      </div>
      
      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Descrição do evento</label>
        <div class="col-md-10">
          <textarea class="form-control" id="" name="descricao"></textarea>  
        </div>
      </div>
      
      <div class="form-group">
          <label for="categoria" class="col-sm-2 control-label">
            Selecione uma categoria:            </label>
                    <div class="col-sm-10">
                      <select  class="form-control" name="categoria" id="categoria">
                        <?php foreach($cats as $cat){ echo "<option value=".$cat->cd_categoria.">".$cat->nm_categoria."</option>"; } ?>
                      </select>
                    </div>
                </div>
      
      <div class="form-group">
                    <label for="artista" class="col-sm-2 control-label">
                        Selecione um Artista:
                    </label>
                    <div class="col-sm-10">
                      <select  class="form-control" name="artista" id="artista">
                        <?php foreach($artista as $cat){ echo "<option value=".$cat->cd_artista.">".$cat->nm_artista."</option>"; } ?>
                      </select>
                    </div>
                </div>
      
      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Classificação indicaiva</label>
        <div class="col-md-10">
          <select  class="form-control" name="classificacao">
            <option value="Livre">Livre</option>
            <option value="Não recomendado para menores de dez anos">Não recomendado para menores de dez anos</option>
            <option value="Não recomendado para menores de doze anos">Não recomendado para menores de doze anos</option>
            <option value="Não recomendado para menores de catorze anos">Não recomendado para menores de catorze anos</option>
            <option value="Não recomendado para menores de dezesseis anos">Não recomendado para menores de dezesseis anos</option>
            <option value="Não recomendado para menores de dezoito anos">Não recomendado para menores de dezoito anos</option>
          </select>
        </div>
      </div>
      
      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Data</label>
        <div class="col-md-10">
          <input type="date" class="form-control" id="" name="data">  
        </div>
      </div>
      
      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Hora</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="" name="hora">  
        </div>
      </div>
      
      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Local</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="" name="local">
        </div>
      </div>
      
      
      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Preço</label>
        <div class="col-md-10">
          <input type="text" class="form-control" id="" name="preco">
        </div>
      </div>
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
                        </div>
    </form>
</main>

<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.Jcrop.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/scripts.js"></script>
<?php include('includes/footer.php')?>