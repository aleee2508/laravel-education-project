      @extends('layouts.template')
      @section('content')
      <section class="container-secretaria">
        <div class="wraper-secretaria">
          <h2>{{$infoPage['pagina secretaria titulo']}}</h2>
          <div class="contain-secretary image">
            <img src="img/pages/secretaria.png" alt="">
          </div>
          <div class="contain-secretary information">
            <h3>{{$infoPage['pagina secretaria subtitulo']}}</h3>
            <div class="">
              <p> {{$infoPage['pagina secretaria texto1']}}
                  <br>
                  {{$infoPage['pagina secretaria texto2']}}
                  <br>
                  {{$infoPage['pagina secretaria texto3']}}
              </p>
            </div>
          </div>
        </div>
      </section>
      @include('components.footer')
      @endsection
