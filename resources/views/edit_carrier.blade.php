<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
   <div class="container">
      <h2>Portador</h2><br/>
      <form method="post" action="{{action('CarrierController@update', $id)}}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Nome:</label>
            <input type="text" class="form-control" name="name" value="{{$carrier->name}}">
          </div>
        
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Cpf">CPF:</label>
              <input type="text" class="form-control" name="cpf" value="{{$carrier->cpf}}">
            </div>
          </div>

				</div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Password">Senha:</label>
              <input type="text" class="form-control" name="password"
              value="{{$carrier->password}}">
            </div>
          </div>

        <div class="row">
          <div class="col-md-4"></div>
          	<div class="form-group col-md-4">
            <strong>Date:</strong>  
            <input class="date form-control"  type="text" id="datepicker" name="date" value="{{$carrier->date}}">   
         </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Street">Rua:</label>
              <input type="text" class="form-control" name="street" value="{{$carrier->street}}">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Numero:</label>
              <input type="number" class="form-control" name="number" value="{{$carrier->number}}">
            </div>
          </div>

					 <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Bairro">Bairro:</label>
              <input type="text" class="form-control" name="bairro" value="{{$carrier->bairro}}">
            </div>
          </div>

           <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="City">Cidade:</label>
              <input type="text" class="form-control" name="city" value="{{$carrier->city}}">
            </div>
          </div>
						
     
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>
</html>