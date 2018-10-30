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
    <h1>Responsáveis</h1>
    <a href="{{action('ResponsibleController@create')}}" class="btn btn-primary">Ir para o formulário</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Email</th>
        <th>Rua</th>
        <th>Numero</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($responsibles as $responsible)
      @php
        $date=date('Y-m-d', $responsible['date']);
        @endphp
      <tr>
        <td>{{$responsible['id']}}</td>
        <td>{{$responsible['name']}}</td>
        <td>{{$responsible['cpf']}}</td>
        <td>{{$responsible['email']}}</td>
        <td>{{$responsible['street']}}</td>
        <td>{{$responsible['number']}}</td>
        <td>{{$responsible['bairro']}}</td>
        <td>{{$responsible['city']}}</td>
        
        <td><a href="{{action('ResponsibleController@edit', $responsible['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('ResponsibleController@destroy', $responsible['id'])}}" method="post">
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