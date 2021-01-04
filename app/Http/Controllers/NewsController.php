<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use App\Models\Autores;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news = Noticias::first()->simplePaginate(6);
        return view('layaout', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticias  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $news = DB::table('noticias')
        ->leftJoin('autores', 'noticias.autorId', '=', 'autores.id')
        ->leftJoin('categorias', 'noticias.categoriaId', '=', 'categorias.id')
        ->where('noticias.id', '=', $id )
        ->select('titulo', 'contenido', 'imagen', 'categoria', 'nombre', 'fecha')
        ->first();

      //  $news = Noticias::find($id);
      return view('detalleNoticia', ['news' => $news]);
      // return view('detalleNoticia', compact('news'));
  
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticias  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticias  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticias  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }


    public function getCategoria($id) {
      
        if (Categorias::where('id', $id)->exists()) {
            $news = DB::table('noticias')
            ->leftJoin('autores', 'noticias.autorId', '=', 'autores.id')
            ->leftJoin('categorias', 'noticias.categoriaId', '=', 'categorias.id')
            ->where('categorias.id', '=', $id )
            ->select('titulo', 'contenido', 'categoria', 'nombre', 'fecha')
            ->get();
            //->toJson(JSON_PRETTY_PRINT)
            return response($news, 200);
          } else {
            return response()->json([
              "message" => "No se encontro la categoria"
            ], 404);
          }
      }

      public function getAutor($id) {
      
        if (Autores::where('id', $id)->exists()) {
            $news = DB::table('noticias')
            ->leftJoin('autores', 'noticias.autorId', '=', 'autores.id')
            ->leftJoin('categorias', 'noticias.categoriaId', '=', 'categorias.id')
            ->where('autores.id', '=', $id )
            ->select('titulo', 'contenido', 'categoria', 'nombre', 'fecha')
            ->get();
            return response($news, 200);
          } else {
            return response()->json([
              "message" => "No se encontro la categoria"
            ], 404);
          }
      }
      
  

}
