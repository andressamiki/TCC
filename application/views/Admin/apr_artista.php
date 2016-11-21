<?php include('includes/header.php')?>
<?php include('includes/nav.php')?>
 <table class="table table-striped" style="font-size:0.9em">
<tr>
    <th>Nome do artista ou grupo</th>
    <th>Descrição</th>
    <th>Rede social de maior relevancia</th>
    <th>Site</th>
    <th>Aprovar ou deletar</th>
  </tr>
   <?php foreach($arts as $art){  
  echo "<tr>
    <td>".$art->nm_artista."</td>
    <td>".$art->ds_artista."</td>
    <td><a href='".$art->ds_redes."'>".$art->ds_redes."</td>
    <td><a href='".$art->ds_site."'>".$art->ds_site."</td>
    <td><a href='aprovar/".$art->cd_usuario."'><button type='button' class='btn btn-success btn-xs'>Aprovar</button></a><br><br><a href='deletar/".$art->cd_usuario."'><button type='button' class='btn btn-danger btn-xs'>Deletar</button></a></td>
  </tr>"; }
  ?>
</table> 