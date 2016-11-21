<?php include('includes/header.php')?>
<?php include('includes/nav.php')?>
<main id="content">
    <div class="container">
        <header>
            <h2 class="text-center">
                Eventos
            </h2>
        </header>
        <hr>
        <br>
        <div class="well">
            <form class="form-horizontal" action="/index.php/controleuser/consultaok"
            method="POST">
                <div class="form-group">
                    <label for="titulo" class="col-sm-2 control-label">
                        Título:
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control w3-input" name="titulo" id="titulo">
                    </div>
                </div>
                <div class="text-right">
                    <input class="btn btn-default" type="submit" value="Consultar">
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>static/img/1.jpg" alt="Lazy Owl Image">
                <h6>8ª edição do O Coletivo</h6>
            </div>
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>static/img/2.jpg" alt="Lazy Owl Image">
                <h6>Exposição mostra desenhos de Calixto restaurados</h6>
            </div>
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>static/img/3.jpg" alt="Lazy Owl Image">
                <h6>Exposição: Viva Sonia Braga</h6>
            </div>
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>static/img/4.jpg" alt="Lazy Owl Image">
                <h6>Exposição: Do campo à cidade grande</h6>
            </div>
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>static/img/5.jpg" alt="Lazy Owl Image">
                <h6>Encontros com a História da Arte na Pinacoteca</h6>
            </div>
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>static/img/10.jpg" alt="Lazy Owl Image">
                <h6>Lilith, Medusa e a mulher contemporânea</h6>
            </div>
        </div>
    </div>
</main>