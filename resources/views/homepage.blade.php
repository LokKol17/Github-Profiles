<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Github Profiles</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/style.css') }}">
</head>
<body>

<header class="header">
    <h1 class="header__title"><a href="{{ route('homepage') }}"> Github Profiles </a></h1>
    <img src="#" alt="GL" class="header__change-theme">
</header>

<main class="main">
    <form class="form" action="{{ route('user') }}" method="GET">
        <label for="nickname" class="form__label">Insira o nome de Usuário</label>
        <input type="text" name="nickname" id="nickname" class="form__input" placeholder="ex. lokkol17">
        <span>@isset($errorMessage) {{ $errorMessage }} @endisset</span>
        <button type="submit" class="form__button">Buscar</button>
    </form>
</main>

</body>
</html>
