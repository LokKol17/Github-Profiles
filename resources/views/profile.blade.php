<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{$data['login']}} - Github Profiles</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('profile/style.css') }}">
</head>
<body>

<header class="header">
    <h1 class="header__title"><a href="{{ route('homepage') }}"> Github Profiles </a></h1>
    <img src="#" alt="GL" class="header__change-theme">
</header>

<main class="main">
    <section class="user">
        <div class="user__container">
            <div class="user__image--bg">
                <img src="{{ $data['avatar_url'] }}" alt="user_avatar" class="user__image">
            </div>
            <div class="user__info">
                <h1 class="user__nickname">{{ $data['login'] }}</h1>
                <div class="user__followers">
                    <img src="{{ asset('images/followers.svg') }}" alt="ic" class="user__followers__icon">
                    <p class="user__followers__count">{{ $data['followers'] }} Followers</p>
                </div>
                <div class="user__repositories">
                    <img src="{{ asset('images/repository.svg') }}" alt="ic" class="user__repositories__icon">
                    <p class="user__repositories__count">{{ $data['public_repos'] }} Repositories</p>
                </div>
            </div>
        </div>
        <div class="user__bio">
            <h2 class="user__bio__title">Bio</h2>
            <div class="user__bio__container">
                <p class="user__bio__content">{{ $data['bio'] }}</p>
            </div>
        </div>
    </section>
</main>

</body>
</html>
