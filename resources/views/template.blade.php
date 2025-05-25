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

    @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
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

    <div class="container-fluid">
        <div class="mb-3">
            <nav class="navbar navbar-expand-lg navbar-dark shadow p-3 mb-5 rounded" style="background: #ed0030">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <a class="navbar-brand" href="#">: : C O N T R O L E</a>
                  <ul class="navbar-nav mr-auto mt-0 mt-lg-0">
                    <li class="nav-item active">
                    </li>
                  </ul>
                  <div style="font-size: 30px; color: white; margin-right: 20px;">
                        @if(auth()->user())
                            {{ auth()->user()->name }}
                        @endif
                  </div>

                  <form class="form-inline my-2 my-lg-0" name="form-logout" method="POST" action={{ route('user.logout') }}>
                    @csrf
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>
                  </form>
                </div>
            </nav>
        </div>

        <div class="mt-10">
                <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 100pt">
                    <a class="navbar-brand" href="{{ route('home') }}">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                        <a class="nav-item nav-link" href="{{ route('user.view.create') }}">Usuário</a>
                        <a class="nav-item nav-link" href="#">Configurações</a>
                        <a class="nav-item nav-link disabled" href="#">Marcação de ponto</a>
                        <a class="nav-item nav-link disabled" href="#">Clientes</a>
                        <a class="nav-item nav-link disabled" href="#">Sobre</a>
                      </div>
                    </div>
                  </nav>
        </div>

        <div class="card" style="width: 100%; margin-left: 0px; margin-top: 20px; margin-right: 0px; margin-bottom: 20px">
            <div class="card-header">
                @yield('section_header_card')
            </div>
            <div class="card-body">
                {{-- Conteúdo que vem das páginas fragmentos --}}
                @yield('content')
                <br>
                @yield('section_errors')
                @yield('section_success')
            </div>
          </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
