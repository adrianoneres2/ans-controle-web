@extends('template')

@section('section_header_card')
    @include('user.menu')
@endsection


@section('content')

<div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Detalhes do usuário</h5>

          <table class="table table-sm" style="margin-top: 20px">
                <tr><td >Identificador</td>  <td>{{ $users->id }}</td></tr>
                <tr><td >Nome</td>   <td>{{ $users->name }}</td></tr>
                <tr><td >E-mail</td>    <td>{{ $users->email }}</td></tr>
                <tr><td >Data de Criação</td>   <td>{{ $users->created_at }}</td></tr>
                <tr><td >Data de Modificação</td>    <td>{{ $users->updated_at }}</td></tr>
                <tr><td >Data de verificação de E-mail</td>    <td>{{ $users->email_verified_at }}</td></tr>
          </table>

        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Alteração de senha</h5>

          <form name="form-update-password" method="POST" action= {{ route('user.store.password') }}>
            @csrf
            <div class="form-group">
            <table>
                <th>
                     <tr>
                        <td style="width: 130px"><label>Password </label></td>
                        <td><input class="form-control" type="password" placeholder="Digite a senha" name="password"></td>
                        <input class="form-control" type="hidden" value= {{ $users->email }} name="email">
                     </tr>
                     <tr>
                        <td style="width: 130px"><label>New Password</label></td>
                        <td><input class="form-control" type="password" placeholder="Digite a senha" name="confirmPassword"></td>
                     </tr>
                     <tr>
                       <td> <input type="submit" value="Enviar" name="bt-enviar" class="form-control btn btn-danger"  style="font-weight: 900"></td>
                     </tr>
                </th>
            </table>
            </div>
        </form>

        </div>
      </div>
    </div>
  </div>


  @endsection
