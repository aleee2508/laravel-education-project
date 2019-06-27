<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('js/slick-1.8.1/slick/slick.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script type="text/javascript" src="{{ asset('js/jquery/jquery-3.3.1.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/animatescroll.js/animatescroll.js') }}"></script>
		    <script type="text/javascript" src="{{ asset('js/slick-1.8.1/slick/slick.js') }}"></script>
        <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@8') }}"></script>

        <link rel="stylesheet" href="{{ asset('sweetalert2.min.css') }}">
    </head>
    <body>
    <header>
      <div class="content">
        <i class="fa fa-bars cap"></i>
        <h1>
          <a href="/">{{$infoPage['titulo del centro']}}
          </a>
        </h1>
        <nav>
          <ul>
            <li><a href="/nuestro-centro">Nuestro Centro</a></li>
            <li><a href="/secretaria">Secretaría</a></li>
            <li><a href="#">Formación</a>
              <ul>
                <li><a href="/formacion/informatica">Informatica</a></li>
                <li><a href="/formacion/administracion">Administración</a></li>
                <li><a href="/formacion/sanidad">Sanidad</a></li>
              </ul>
            </li>
            <li><a href="/noticias">Noticias</a></li>
            <li><a href="/contacto">Contacto</a></li>
          </ul>
        </nav>

      </div>
    </header>
      @yield('content')

  </body>
</html>
