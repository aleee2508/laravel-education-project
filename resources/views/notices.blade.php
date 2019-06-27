      @extends("layouts.template")
      @section('content')
      <section class="container-notices">


        <div class="wraper-notices">
          <h2>{{$infoPage['pagina noticias titulo']}}</h2>
          <!-- <img src="img/pages/posts.png" alt=""> -->
          @foreach($announcements as $announcement)
            <div class="noticias-completas">
              <h2>{{$announcement->title}}</h2>
              <p>{{$announcement->subhead}}</p>
              <p>{{$announcement->content}}</p>
              <img src="{{$announcement->image}}" alt="{{$announcement->title}}">
            </div>
          @endforeach
        </div>
      </section>
      //@include('components.footer')
      @endsection
