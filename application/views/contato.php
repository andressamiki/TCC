<?php include('includes/header.php')?>
<?php include('includes/nav.php')?>
<main id="content">
    <div class="container">
        <header>
            <h2 class="text-center">
                Entre em contato
            </h2>
        </header>
        <hr>
        <br>
        <div class="well">
            <form class="form-horizontal" action="/index.php/Welcome/doPost" method="POST">
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">
                        Nome:
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">
                        E-mail:
                    </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mensagem" class="col-sm-2 control-label">
                        Mensagem:
                    </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="mensagem" id="mensagem"></textarea>
                    </div>
                </div>
                <div class="text-right">
                    <input class="btn btn-default" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</main>