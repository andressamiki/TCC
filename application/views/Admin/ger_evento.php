<?php include('includes/header.php')?>
<?php include('includes/nav.php')?>
<main class="" id="content">
    <form action="/gerenciar-evento-id1" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
      <div class="text-right">
        <input type="submit" class="btn btn-default">
      </div>
    </form>
</main>

<?php include('includes/footer.php')?>