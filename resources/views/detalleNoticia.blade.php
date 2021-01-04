<!DOCTYPE html>
<html>
  <head>
    <title>Noticias</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
  </head>
  <body>
    <h1>Noticias del mundo</h1>
    <div class="contenedor">
  <div class="resumen">
    <h2 class="resumen" >Noticia {{ $news->titulo }}</h1>
    <ul class="resumen">
      <li class="resumen">Titulo: {{ $news->titulo }}</li>
      <li class="resumen">Categoria: {{ $news->categoria }}</li>
      <li class="resumen">Autor: {{ $news->nombre }}</li>
      <li class="resumen">Fecha Publicación: {{ $news->fecha }}</li>
      <li class="resumen">Contenido: {{ $news->contenido }}</li>
      <li class="resumen"> <img src="{{$news->imagen}}" alt="Noticia Prueba" width="100" height="100"></li>
      <a href="{{url('/news')}}">Regresar a Noticias</a>
    </ul>
    </div>
    </div>
  </body>
</html>

