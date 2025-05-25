@extends('template')

@section('section_header_card')
    @include('user.menu')
@endsection

@section('content')
    <form name="form-update-password" method="POST" action= {{ route('user.store.password') }}>
        @csrf
        <div class="form-group">
        <table>
            <th>
                <tr>
                    <td style="width: 130px"><label>E-mail </label></td>
                    <td><input class="form-control" type="email" placeholder="Digite o E-mail" name="email"></td>
                 </tr>
                 <tr>
                    <td style="width: 130px"><label>Password </label></td>
                    <td><input class="form-control" type="password" placeholder="Digite a senha" name="password"></td>
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
@endsection
