<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/img/clean_code_72_color.png" rel="icon" type="image/png">

        <title>مسابقات clean code</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/landing-page.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <img src="/img/clearncode.jpg" alt="">
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    clean code
                </div>
                <div class="links">
                    <a href="/register-member">ثبت نام</a>
                    <a href="/follow-up">پی گیری ثبت نام</a>
                </div>
            </div>
        </div>
    </body>
</html>
