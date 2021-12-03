<?php include "bootstraphead.html";?>

<main>

    <div class="album py-5 bg-light">
      <div class="container">
        <h1>Cadastros</h1>  
      </div>
    
      <table class="table table-hover">
        <?php
        
        $row = 1;
        $f = fopen("CandidatoPorAutoDeclaracaoEnsinoRendaEBairro.csv", "r");
        if ($f !== FALSE) {
            $data = fgetcsv($f, 1000, ",");
            while ($data !== FALSE) {
                echo "<tr>";
                foreach($data as $valor) {
                    if($row == 1) {
                        echo "<th>$valor</th>";
                    } else {
                        echo "<td>$valor</td>";
                    }
                }
                echo "</tr>";
                $data = fgetcsv($f, 1000, ",");  
                $row++;  
            }    
            fclose($f);
        }
    
        ?>
      </table>
    
    </div> 
</main>

<?php include "bootstrapfoot.html";?>
