<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""><img src="<?php echo base_url(); ?>static/img/bu.png"></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index">Home</a></li>
            <li><a href="sobre">Sobre</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Eventos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="eventos">Agenda completa</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="artesedesign">Arte e Design</a></li>
                <li><a href="danca">Dança</a></li>
                <li><a href="musica">Musica</a></li>
                <li><a href="teatro">Teatro</a></li>
              </ul>
            </li>
            <li><a href="artistas">Artistas</a></li>
            <li><a href="contato">Contato</a></li>
            <li><a href="login">Área Restrita</a></li>
            <li><a href="querodivulgar">Quero divulgar</a></li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-left">
            <div class="form-group" style="margin-top:10px">
              <input type="text" class="form-control" placeholder="Busca">
            </div>
            <button type="submit" class="btn btn-default" style="margin-top:10px">Buscar</button>
          </form>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
      <div class="bg-bottom">
</div>
    </nav>
    

<!--Fim do Nav-->