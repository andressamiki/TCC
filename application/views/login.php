<?php include('includes/header.php')?>
<?php include('includes/nav.php')?>
<main id="content">
    <div class="container">
        <header>
            <h2 class="text-center">
                Área Restrita
            </h2>
        </header>
        <hr>
        <br>
        <div class="well">
            <form class="form-horizontal" action="/index.php/Welcome/valida" method="POST">
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">
                        Login:
                    </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="key" class="col-sm-2 control-label">
                        Senha:
                    </label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control"  name="key" id="key" required/>  
                    </div>
                </div>
                <div class="text-right">
                    <input class="btn btn-default" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</main>