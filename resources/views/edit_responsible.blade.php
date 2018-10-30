<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Editar Formulario</h2><br  />
        <form method="post" action="{{action('ResponsibleController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$responsible->name}}">
          </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" name="cpf" value="{{$responsible->cpf}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="{{$responsible->email}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="password">Senha:</label>
              <input type="text" class="form-control" name="password" value="{{$responsible->password}}">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="street">Rua:</label>
              <input type="text" class="form-control" name="street" value="{{$responsible->street}}">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Numero:</label>
              <input type="text" class="form-control" name="number" value="{{$responsible->number}}">
            </div>
          </div>
           <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="bairro">Bairro:</label>
              <input type="text" class="form-control" name="bairro" value="{{$responsible->bairro}}">
            </div>
          </div> <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="city">Cidade:</label>
              <input type="text" class="form-control" name="city" value="{{$responsible->city}}">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Enviar Cadrastro</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>