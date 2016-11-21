<?php include('includes/header.php')?>
<?php include('includes/nav.php')?>
<main id="content">
    <form action="/index.php/Admin/categoria" method="POST" class="form-horizontal">
      <div class="form-group" >
        <label for="" class="col-sm-2 control-label">Nome da categoria</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="" name="nome">
        </div>
      </div>
      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Descrição da categoria</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="" name="descricao"></textarea>
        </div>
      </div>
      <div class="text-right">
        <input type="submit" class="btn btn-default">
      </div>
    </form>
</main>

<?php include('includes/footer.php')?>