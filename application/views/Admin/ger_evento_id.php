<?php include('includes/header.php')?>
<?php include('includes/nav.php')?>
 <table class="table table-striped" style="font-size:0.9em">
<tr>
    <th>Nome do evento</th>
    <th>Descrição do evento</th>
    <th>Data</th>
    <th>Hora</th>
    <th>Categoria</th>
    <th>Deletar</th>
  </tr>
   <?php foreach($events as $event){   
  echo "<tr>
    <td>".$event->nm_evento."</td>
    <td>".$event->ds_evento."</td>
    <td>".$event->ds_data."</td>
    <td>".$event->ds_hora."</td>";
    echo "<td>";
        if($event->cd_categoria == 5){
            echo "Dança";  
        }else if($event->cd_categoria == 2){
                echo "Circo";
            }else if($event->cd_categoria == 3){
                    echo "Música";
                }else if($event->cd_categoria == 4){
                        echo "Artes plásticas e design";  
                    }else{
                            echo "Teatro";
                    } 
        
    echo "</td>
    <td><a href='deletar-evento/".$event->cd_evento."/".$event->cd_artista."'><button type='button' class='btn btn-danger btn-xs'>Deletar</button></a></td>
  </tr>"; } ?>
</table> 