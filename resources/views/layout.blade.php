<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <div class="container">
            <span class="fs-1">Index</span>
        </div>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-4 py-3 link-body-emphasis text-decoration-none" href="/">Главная</a>
        <a class="me-4 py-3 link-body-emphasis text-decoration-none" href="/about">Про нас</a>
        <a class="me-4 py-3 link-body-emphasis text-decoration-none" href="/admin/login">Войти</a>
        <a class="py-2 link-body-emphasis text-decoration-none" href="#"></a>
    </nav>
</div>
<div class="container">
    @yield('main_content')
</div>


</body>
</html>
