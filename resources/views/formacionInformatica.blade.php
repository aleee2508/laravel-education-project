      @extends('layouts.template')
      @section('content')
  		<section class="container-oferta">
  			<div class="wraper-oferta">
    				<h2>{{$infoPage['pagina formacion informatica titulo']}}</h2>
  				<div class="container-grados">
  					<div>
  						<a class="text-grados" id="grado-medio-inf" href="informatica/grado-medio">
  							<img src="../img/formacion/grado-medio-inf.jpg" alt="">
  						</a>
  					</div>
  					<div>
  						<a class="text-grados" id="grado-superior-inf" href="informatica/grado-superior">
  							<img src="../img/formacion/grado-superior-inf.jpg" alt="">
  						</a>
  					</div>
  				</div>
  			</div>
  		</section>
      @include('components.footer')
      @endsection
