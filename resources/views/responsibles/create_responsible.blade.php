<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastrar Responsáveis</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Cadastro de Responsavel</h2><br/>
      <form method="post" action="{{url('responsibles')}}" enctype="multipart/form-data">
        @csrf
        
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" name="name" required="">
        </div>

        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="CPF">CPF:</label>
              <input type="text" class="form-control" name="cpf"  maxlength="14" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
      title="Digite o CPF no formato nnn.nnn.nnn-nn" placeholder="nnn.nnn.nnn-nn">
            </div>
          </div>
           </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email" required="">
            </div>
          </div>
        
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Password">Senha:</label>
              <input type="password" class="form-control" name="password" required="">
            </div>
          </div>
           <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Rua">Rua:</label>
              <input type="text" class="form-control" name="street" required="">
            </div>
          </div>
           </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Numero:</label>
              <input type="text" class="form-control" name="number"  placeholder="9 1234-5678"
           pattern="[9]{1} [0-9]{4}-[0-9]{4}" maxlength="11"required="">
            </div>
        </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Bairro">Bairro:</label>
              <input type="text" class="form-control" name="bairro" required="">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="City">Cidade:</label>
              <input type="text" class="form-control" name="city" required="">
            </div>
          </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-primary"> Cadrastrar</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>