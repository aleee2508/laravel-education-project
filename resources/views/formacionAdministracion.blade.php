      @extends('layouts.template')
      @section('content')
  		<section class="container-oferta">
  			<div class="wraper-oferta">
  				<h2>{{$infoPage['pagina formacion administracion titulo']}}</h2>
  				<div class="container-grados">
  					<div>
  						<a class="text-grados" id="grado-medio-admin" href="administracion/grado-medio">
  							<img src="../img/formacion/administracion-1.jpg" alt="">
  						</a>
  					</div>
  					<div>
  						<a class="text-grados" id="grado-superior-admin" href="administracion/grado-superior">
  							<img src="../img/formacion/administracion-3.jpg" id="gs-administracion" alt="">
  						</a>
  					</div>
  				</div>
  			</div>
  		</section>
      @include('components.footer')
      @endsection
