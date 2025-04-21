<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
    @endif

    <form name="form-create-user" method="POST" action= {{ route('store-user') }}>
        @csrf
        <label>Nome  </label><input type="text" placeholder="Informe o nome do usuário" name="name">
        <label>E-Mail </label><input type="text" placeholder="Informe o e-mail" name="email">
        <label>Password </label><input type="password" name="password">
        <input type="submit" value="Enviar" name="bt-enviar">
    </form>

</body>
</html>
