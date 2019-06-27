      @extends('layouts.template')
      @section('content')
      <section class="container-contact">
        <div class="wraper-contact">
            <h2>{{$infoPage['pagina contacto titulo']}}</h2>
          <div class="content-contact left">
            <img src="img/pages/contact.png" alt="">
          </div>
          <div class="content-contact right">
            <form class="" action="{{url('/pruebainsertar')}}" method="post" onSubmit="return validateForm();">
              @csrf
              <label for="name">Nombre </label>
              <input type="text" name="name" id="nombre" placeholder="Peter">

              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="peter@email.com">

              <label for="subject">Asunto</label>
              <input type="text" name="subject" id="asunto" placeholder="Asunto del mensaje">

              <label for="message">Mensaje</label>
              <textarea name="message" id="mensaje" rows="8" cols="80" placeholder="Le escribo debido a ..."></textarea>

              <button type="submit" name="enviar" value="enviar">Enviar</button>
            </form>
          </div>
        </div>
      </section>
      @endsection
