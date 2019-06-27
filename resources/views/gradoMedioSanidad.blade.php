      @extends('layouts.template')
      @section('content')
      <section class="container-grado-medio-inf">
  			<div class="wraper-grado-medio">
  				<h2>{{$infoPage['pagina grado medio sanidad titulo']}}</h2>
  				<div class="container-text-grado-medio">
  					<p>{{$infoPage['pagina grado medio sanidad texto1']}}</p>
  					<p>{{$infoPage['pagina grado medio sanidad texto2']}}</p>
  					<p>{{$infoPage['pagina grado medio sanidad texto3']}}</p>
  				</div>
  			</div>
  			<div class="galeria-grado-medio">
  				<h3>{{$infoPage['galeria titulo general']}}</h3>
          @foreach($imagesGallery as $img)
            <div><img src="{{$img->image}}" alt="{{$img->name}}"></div>
          @endforeach
  			</div>
  		</section>
      @include('components.footer')
      @endsection
