<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style type="text/css">
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <h1>Portador</h1>
     <a class="btn btn-primary" href="{{action('CarrierController@create')}}">Ir para o Formulário</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>CPF</th>
        <th>SENHA</th>
        <th>DATA</th>
        <th>RUA</th>
        <th>NUMERO</th>
        <th>BAIRRO</th>
        <th>CIDADE</th>
        <th colspan="2">ACTION</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($carriers as $carrier)
      @php
        $date=date('Y-m-d', $carrier['date']);
        @endphp
      <tr>
        <td>{{$carrier['id']}}</td>
        <td>{{$carrier['name']}}</td>
        <td>{{$carrier['cpf']}}</td>
        <td>{{$carrier['password']}}</td>
        <td>{{$date}}</td>
        <td>{{$carrier['street']}}</td>
        <td>{{$carrier['number']}}</td>
        <td>{{$carrier['bairro']}}</td>
        <td>{{$carrier['city']}}</td>
        
        <td><a href="{{action('CarrierController@edit', $carrier['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CarrierController@destroy', $carrier['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>