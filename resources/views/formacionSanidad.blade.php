      @extends('layouts.template')
      @section('content')
      <section class="container-oferta">
        <div class="wraper-oferta">
          <h2>{{$infoPage['pagina formacion sanidad titulo']}}</h2>
          <div class="container-grados">
            <div>
              <a class="text-grados" id="grado-medio-san" href="sanidad/grado-medio">
                <img src="../img/formacion/sanidad.jpg" alt="">
              </a>
            </div>
            <div>
              <a class="text-grados" id="grado-superior-san" href="sanidad/grado-superior">
                <img src="../img/formacion/sanidad-2.jpg" alt="">
              </a>
            </div>
          </div>
        </div>
      </section>
      @include('components.footer')
      @endsection
