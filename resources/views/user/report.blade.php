@extends('template')

@section('section_header_card')
    @include('user.menu')
@endsection

@section('content')

<form name="form-user-report" method="POST" action= {{ route('user.details') }}>
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Endereço de Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div><input type="submit" value="Enviar" name="bt-enviar" class="btn btn-danger" style="font-weight: 900"></div>
  </form>


  <table class="table table-sm" style="margin-top: 20px">
    <thead>
      <tr>
        <th scope="col">Identificador</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Data de Criação</th>
        <th scope="col">Data de Modificação</th>
        <th scope="col">Data de verificação de E-mail</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{ $users->id }}</th>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->created_at }}</td>
            <td>{{ $users->updated_at }}</td>
            <td>{{ $users->email_verified_at }}</td>
        </tr>
    </tbody>
  </table>

@endsection
