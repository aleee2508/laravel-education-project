      @extends('layouts.template')

      @section('content')
      <section class="container content-1">
        <div class="title-text">
              <p> {{$infoPage['pagina principal titulo']}}</p>
        </div>
        <div class="slider-wrapper">
          <div class="slider-width">
            @foreach($sliders as $imgs)
              <div><img src="{{$imgs->image}}" alt="{{$imgs->name}}"></div>
            @endforeach
          </div>
        </div>
      </section>
      <section class="container content-2">
          <h2>{{$infoPage['pagina principal seccion oferta titulo']}}</h2>
        <ul>
          <li>
            <div class="offer-image">
              <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="offer-text">
              <p>{{$infoPage['pagina principal seccion oferta texto1']}}</p>
            </div>
          </li>
          <li>
            <div class="offer-image">
              <i class="fas fa-desktop"></i>
            </div>
            <div class="offer-text">
              <p>{{$infoPage['pagina principal seccion oferta texto2']}}</p>
            </div>
          </li>
          <li>
            <div class="offer-image">
              <i class="fas fa-toolbox"></i>
            </div>
            <div class="offer-text">
              <p>{{$infoPage['pagina principal seccion oferta texto3']}}</p>
            </div>
          </li>
        </ul>
      </section>
      <section class="container content-3">
        <h2>{{$infoPage['pagina principal seccion informacion titulo']}}</h2>
        <div class="content-info-main">
          <div class="content-info text">
            <p>{{$infoPage['pagina principal seccion informacion texto']}}</p>
          </div>
          <div class="content-info image">
            <img src="img/pages/informacion.png" alt="">
          </div>
        </div>
      </section>
      <section class="container content-4">
        <h2>{{$infoPage['pagina principal seccion noticias titulo']}}</h2>
        <div class="content-info-main">
          <div class="content-info image">
            <img src="img/pages/news.png" alt="">
          </div>
          <div class="content-info text">
            <!-- <p>Aqui iran noticias dinámicas generadas desde el back-end</p> -->
            @foreach($announcements as $annoucement)
              <div class="list-noticias"><a href="/noticias">{{$annoucement->title}}</a></div>
            @endforeach
          </div>
      </section>
      <section class="container content-5">
        <h2>{{$infoPage['pagina principal seccion colaboradores titulo']}}</h2>
        <div>
          @foreach($collaborators as $collaborator)
          <img src="{{$collaborator->image}}" alt="{{$collaborator->nombre}}">
          @endforeach
        </div>
      </section>

      @include('components.footer')
      @endsection
