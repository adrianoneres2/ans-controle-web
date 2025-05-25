@extends('template')

@section('section_header_card')
    @include('user.menu')
@endsection

@section('content')
    <form name="form-create-user" method="POST" action= {{ route('user.store') }}>
        @csrf
        <div class="form-group">
        <table>
            <th>
                <tr>
                    <td style="width: 130px"><label>Nome </label></td>
                    <td><input class="form-control" type="text" placeholder="Informe o nome do usuário" name="name"></td>
                 </tr>
                 <tr>
                    <td style="width: 130px"><label>E-Mail</label></td>
                    <td><input class="form-control" type="text" placeholder="Informe o e-mail" name="email"></td>
                 </tr>
                 <tr>
                    <td style="width: 130px"><label>Password</label></td>
                    <td><input class="form-control" type="password" placeholder="Digite a senha" name="password"></td>
                 </tr>
                 <tr>
                   <td> <input type="submit" value="Enviar" name="bt-enviar" class="form-control btn btn-danger"  style="font-weight: 900"></td>
                 </tr>
            </th>
        </table>
        </div>
    </form>
@endsection
