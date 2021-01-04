<!DOCTYPE html>
<html>
  <head>
    <title>Noticias</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
   

  </head>
  <body>
    <h1>Noticias del mundo</h1>
    <div class="container">
  @foreach ($news as $new)
  <div class="noticia">
    <h2>Noticia {{ $new->titulo }}</h1>
    <ul>
      <li>Titulo: {{ $new->titulo }}</li>
      <li>Fecha Publicación: {{ $new->fecha }}</li>
      <li> <img src="{{$new->imagen}}" alt="Noticia Prueba" width="100" height="100"></li>
      <li><a href="{{route('news',[$new->id])}}">Ver Noticia </a> </li>
    </ul>
    </div>
    @endforeach
    {!! $news->links("pagination::simple-bootstrap-4") !!}
    </div>        
  </body>
</html>