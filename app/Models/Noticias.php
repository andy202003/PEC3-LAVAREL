<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    use HasFactory;
    protected $news = 'noticias';
    public $timestamps = false;
   // protected $primaryKey = 'NoticiaId';

   /*protected $fillable = [
   'id', 'titulo','autorId','fecha','contenido','imagen','categoriaId',
];
*/
/*

public function test_models()
{
    $news = User::factory()->count(3)->make();

}*/

}