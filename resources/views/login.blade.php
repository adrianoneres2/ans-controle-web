<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/css/estilo.css">
    <link rel="stylesheet" href="/resources/css/image.css">
    <title>Document</title>
</head>
<body>

{{-- sessão de erros padrão para todas as páginas HTML --}}
@section('section_errors')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
    @endif
@endsection

{{-- sessão de sucesso padrão para todas as páginas HTML --}}
@section('section_success')
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
@endsection

    <div class="inner-container d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-sm-6" style="width: 900px">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">ENTRE EM CONTATO</h5>
                    <form>
                         <div class="form-group">
                            <label for="id-name-contact">Nome</label>
                            <input type="email" class="form-control" id="id-name-contact" aria-describedby="emailHelp" placeholder="Enter email">
                         </div>
                         <div class="form-group">
                           <label for="id-email-contact">E-mail</label>
                           <input type="email" class="form-control" id="id-email-contact" aria-describedby="emailHelp" placeholder="Enter email">
                         </div>
                         <input type="submit" value="Enviar" name="bt-send-contact" class="form-control btn btn-danger"  style="font-weight: 900">
                    </form>
                  </div>
                </div>
              </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">LOGIN</h5>
                  <form  name="form-authenticate" action={{ route('authenticate') }} method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="id-email-login">E-mail</label>
                      <input type="email" class="form-control" id="id-email-login" aria-describedby="emailHelp" placeholder="Informe o email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="id-password-login">Password</label>
                      <input type="password" class="form-control" id="id-password-login" placeholder="Password" name="password">
                      <br>
                      <strong>Recuperar senha</strong>
                    </div>
                    <input type="submit" value="Enviar" name="bt-send-login" class="form-control btn btn-danger"  style="font-weight: 900">
                  </form>
                </div>
              </div>
              <div class="card-body">
                @yield('section_errors')
                @yield('section_success')
            </div>
            </div>
          </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
