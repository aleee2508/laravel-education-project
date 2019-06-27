      @extends('layouts.template')
      @section('content')
      <section class="container-centro">
        <div class="wraper-centro">
          <h2>{{$infoPage['pagina nuestro centro titulo']}}</h2>
          <div class="content-centro">
            <p>{{$infoPage['pagina nuestro centro texto1']}}</p>

            <p>{{$infoPage['pagina nuestro centro texto2']}}</p>

            <p class="text-last">{{$infoPage['pagina nuestro centro texto3']}}</p>
            <img src="img/pages/nuestro-centro.png" alt="">
          </div>

        </div>
      </section>
      @include('components.footer')
      @endsection
