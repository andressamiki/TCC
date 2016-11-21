<?php include('includes/header.php')?>
<?php include('includes/nav.php')?>
<main id="content">
    <div class="container">
        <header>
            <h2 class="text-center">
                Formulário de artistas
            </h2>
        </header>
        <hr>
        <br>
            <form class="form-horizontal" action="/index.php/Welcome/enviaformartista" method="POST">
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
                        <?php foreach($cats as $cat){ echo "<option value=".$cat->id_categoria.">".$cat->nm_categoria."</option>"; } ?>
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
                        Redes sociais:
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
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                
                <!--<div class="form-group">
                   <label for="foto" class="col-sm-2 control-label">
                        Foto do artista ou grupo:
                    </label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="foto" id="foto" required>
                    </div>
                </div>-->
                
                <div class="text-right">
                    <input class="btn btn-default" type="submit" value="Cadastrar">
                </div>
            </form>
        </div>
    </main>