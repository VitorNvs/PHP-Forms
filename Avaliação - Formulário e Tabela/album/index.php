
<?php include "bootstraphead.html";?>

<main>

  <div class="album py-5 bg-light">
    <div class="container">
      <h1>Formulário</h1>  
    </div>

    <!--Formulário-->
    <form action="dados.php" method="POST">
      
      <!--Data/Número-->
      <div class="container py-2">
        <div class="row">
          
          <div class="col-2">
            <input type="date" class="form-control"  name="data">
          </div> 
          <div class="col-2">
            <input type="number" class="form-control"  name="num" placeholder="Nº">
          </div> 

        </div>
      </div>

      <!--Firma-->
      <div class="container py-2">
        <div class="row">

          <div class="col-9">
            <input type="text" class="form-control" name="firma" placeholder="Firma">
          </div>

        </div>
      </div>

      <!--Endereço/Complemento-->
      <div class="container py-2">
        <div class="row">

          <div class="col-6">
            <input type="text" class="form-control" name="endereco" placeholder="Endereço">
          </div>
          <div class="col-3">
            <input type="text" class="form-control" name="complemento" placeholder="Complemento">
          </div>

        </div>
      </div>

      <!--Bairro/Cidade/Estado-->
      <div class="container py-2">
        <div class="row">

          <div class="col-3">
            <input type="text" class="form-control" name="bairro" placeholder="Bairro">
          </div>
          <div class="col-3">
            <input type="text" class="form-control" name="cidade" placeholder="Cidade">
          </div>
          <div class="col-3">
            <input type="text" class="form-control" name="estado" placeholder="Estado">
          </div>

        </div>
      </div>

      <!--CEP/CNPJ/Inscr-->
      <div class="container py-2">
        <div class="row">

          <div class="col-3">
            <input type="text" class="form-control" name="cep" placeholder="CEP">
          </div>
          <div class="col-3">
            <input type="text" class="form-control" name="cnpj" placeholder="CNPJ">
          </div>
          <div class="col-3">
            <input type="text" class="form-control" name="inscr" placeholder="Inscr">
          </div>

        </div>
      </div>

      <!--Tels/Celular-->
      <div class="container py-2">
        <div class="row">

          <div class="col-5">
            <input type="text" class="form-control" name="tels" placeholder="Tels">
          </div>
          <div class="col-4">
            <input type="text" class="form-control" name="celular" placeholder="Celular">
          </div>

        </div>
      </div>

      <!--Email-->
      <div class="container py-2">
        <div class="row">

          <div class="col-9">
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>

        </div>
      </div>

      <!--Obs-->
      <div class="container py-2">
        <div class="row">

          <div class="col-9">
            <input type="text" class="form-control" name="obs" placeholder="OBS">
          </div>
          

        </div>
      </div>

      <!--Submit-->
      <div class="container py-2">
        <div class="row">
          
          <div class="col-1">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>

        </div>
      </div>
      

    </form>

  </div> 
</main>

<?php include "bootstrapfoot.html";?>
