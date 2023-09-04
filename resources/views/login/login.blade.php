<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="login d-flex align-items-center justify-content-center" style="width: 100%;min-height:100vh">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <form class="bg-dark rounded text-white p-3" method="post">
                        @csrf
                        <h4>Авторизация</h4>
                        @if ($register)
                            <p class="text-success mb-0">
                                Пользователь успешно создан, теперь вы можете авторизоваться в системе.
                            </p>
                        @else
                            <p class="text-light mb-0">
                                Авторизуйтесь, чтобы продолжить
                            </p>
                        @endif
                        @if ($errors)
                            <ul class="list-unstyled text-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="form-group mt-3">
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Пароль:</label>
                            <input type="text" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <button type="submit" class="btn btn-primary w-100">Войти</button>
                            </div>
                            <div class="col">
                                <a href="{{ route('crm_register') }}" class="btn btn-light w-100">Регистрация</a>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>