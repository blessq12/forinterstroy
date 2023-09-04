<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container">
        <div class="row py-3 align-items-center">
            <div class="col-6 text-start">
                <h5 class="fw-bold m-0">
                    {{ env('APP_NAME') }}
                </h5>
            </div>
            <div class="col-6 text-end">
                {{ $user->name }}
                <a href="{{route('crm_logout')}}" class="btn btn-danger" style="margin-left: 12px">Выйти</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="p-3 bg-dark text-white w-100 rounded-top">
                    <h2>Hey, it's <span class="text-lowercase text-info">{{ env('APP_NAME') }}</span> dashboard</h2>
                    <p>You are logged in now as </p>
                </div>
                
            </div>
        </div>
        
    </div>
    @vite('resources/js/app.js')
</body>
</html>