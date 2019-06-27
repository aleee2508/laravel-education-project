<footer>
  <div class="content">
    <div class="label">
      <h3>{{$infoPage['footer texto']}}
      </h3>
    </div>
    <div class="botones">
      <div class="contenedor">
        <a class="contacta" href="/contacto">{{$infoPage['footer boton']}}</a>
      </div>
    </div>
    <div class="bottom">
    <p>
        {{$infoPage['footer direccion']}}
        <br>
        {{$infoPage['footer telefono']}}
      <br>
    </p>
    <ul class="rrss">
      <li><a target="_blank" href="{{$infoPage['rrss email']}}"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
      <li><a target="_blank" href="{{$infoPage['rrss twitter']}}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
      <li><a target="_blank" href="{{$infoPage['rrss facebook']}}"><i class="fab fa-facebook-f"></i></a></li>
    </ul>
    </div>
  </div>
</footer>
<a id="animate-scroll" onclick="$('body').animatescroll();">
  <i class="fas fa-arrow-up"></i>
</a>
<div class="wrapper-form">
  <button type="button" class="form-toggle"name="button"><i class="fas fa-question"></i></button>
  <div class="form-inner">
    <button type="button" class="close-support" name="button">×</button>
    <div class="support-information">
      <img class="image-support" src="/img/dev.jpg" alt="">
      <div class="support-title">
        Soporte del Centro
      </div>
      <time class="support-time">Friday, 09:55</time>
      <p>Hola, nos complace poder ayudarte con cualquier tema relacionado a la web. Ya sean tus dudas referentes a la web, sugerencias o una aclaración administrativa, te responderemos con la mayor brevedad posible.</p>
    </div>
    <form class="" action="{{url('/pruebainsertar')}}" method="post" onSubmit="return validateForm();">
      <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
      <input type="text" name="name" id="nombre" placeholder="Ingresa tu nombre..">
      <input type="text" name="email" id="email" placeholder="Ingresa tu email..">
      <input type="text" name="subject" id="asunto" placeholder="Ingresa el asunto..">
      <textarea name="message" id="mensaje" maxlength="150" rows="8" cols="80" placeholder="Ingresa el mensaje.."></textarea>
      <button type="submit" class="submit"  name="button">Enviar mensaje</button>
    </form>
  </div>
</div>



<div id="boxita">
  <span class='ion-checkmark-round'></span>
  <h1 id='msgbox'>Mensaje enviado!</h1>

</div>
