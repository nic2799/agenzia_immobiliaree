<?php
$pegeUrl = $_SERVER['PHP_SELF'];
?>
<table class = "table table-striped">
   <thead>
    <tr> <th colspan="5">Case totali in vendita <?=$totalusers?> numero di pagine <?=$numPages?></th></tr>
    <tr>
        <th>ID</th><!-- o anche page senza serve o scrivi direttamente $_SERVER[..] poi passiamo orderby-->
        <th>indirizzo</th><!--quidi di base diamo questa stringa username ecc a orderby poi href è sulla pagina stessa e imponiamo orderby a quella stringa -->
        <th>prezzo</th>
        <th>Descrizione</th>
        <th>immagine</th>
        <th>acquista/elimina</th>
       
       


    </tr>
   </thead>
   <tbody>
    <?php
    if($immobile){
        foreach($immobile as $immobili){
           // echo $immobili['immagine'] ;
            ?>
            
        
            <tr>
                <td><?=$immobili['id_immobile']?></td>
                <td>   <?=$immobili['indirizzo']?> </td>
                <td>  <?=$immobili['prezzo']    ?>  </td>
                <td><?=$immobili['descrizione']?></td>
            <td> <img src="<?=$immobili['immagine']?>"  height="150" width="170"></td>
            <style>

            </style>
            
                <td> 
                    
                    <div class="row">
                        <div class = "col-md-4">
                        <a onclick="return confirm('sei sicuro')" class ="btn btn-danger" href="<?=$updateurl?>?id_immobile=<?=$immobili['id_immobile']?>">
                    elimina <i class="fas fa-ban"></i>
                    </a>
                    </div>
                    </div>
                    
                       
                        
                </td>
        
        </tr>
        <?php
        }
        echo '<tr> <td colspan = "5"> ';
       require_once 'navigation.php';
      echo '</td> </tr>';
    }else{
        echo '<tr> <td colspan="5"> no found </td> </tr>'; 
        require_once 'navigation.php';
    }
    ?>
   


   </tbody>


</table>