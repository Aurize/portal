<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/front.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
    <aside>
        <div class="Logo">
            <a href="{{ url('/') }}">
                <img src="/img/elements/logo.png" class="img-responsive" alt="">
            </a>
        </div>
        <div class="CategoriesWrapper">
            <ul class="CategoriesMenu">
                <li class="CategoriesMenu__item CategoriesMenu__item--dance"><a href="#">Taniec</a></li>
                <li class="CategoriesMenu__item CategoriesMenu__item--recreation"><a href="#">Rekreacja</a></li>
                <li class="CategoriesMenu__item CategoriesMenu__item--fitness"><a href="#">Fitness</a></li>
                <li class="CategoriesMenu__item CategoriesMenu__item--sport"><a href="#">Sport</a></li>
                <li class="CategoriesMenu__item CategoriesMenu__item--beauty"><a href="#">Uroda</a></li>
                <li class="CategoriesMenu__item CategoriesMenu__item--music"><a href="#">Muzyka</a></li>
                <li class="CategoriesMenu__item CategoriesMenu__item--education"><a href="#">Edukacja</a></li>
            </ul>
        </div>
    </aside>
    @yield('content')
</div>

<!-- Scripts -->
<script src="/js/front.js"></script>
<script src="/js/front/homepage.js"></script>
</body>
</html>
