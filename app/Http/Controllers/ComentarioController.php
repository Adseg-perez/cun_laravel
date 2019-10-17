<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Video;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function index(){
    	/*return csrf_token();
    	7FS7w5khuMqP85vNqQWQ1rxI2150FwhPozOe0dKI*/
        $comment = Comentario::find(1);
        return $comment->comentable;
    }
    public function getBlogs(){
        $blogs = Blog::find(3);
        return $blogs->comentarios;
    }
    //método que permit insertar datos con create
    public function storeCreate(Request $request){
        $video = Video::find(5);
        
        $video->comentarios()->create(
            [
                'comentario' => 'En su primera mitad, el cuarto largometraje de Céline Sciamma nos habla de una pintora que debe realizar un retrato sin poder acceder a su modelo.'
            ]
        );
        return $video->comentarios;
    }
    //método que permite insertar datos con createMany
    public function storeCreateMany(Request $request){
        $blog = Blog::find(3);
        $blog->comentarios()->createMany([
            ['comentario' =>'En la segunda parte del video, una vez establecida una unión sólida y afectiva entre quien pinta y quien es pintada, la película se centra en cómo la artista retrata a su modelo en plenitud, teniéndola delante'],
            ['comentario' =>'En la segunda parte del video, una vez establecida una unión sólida y afectiva entre quien pinta y quien es pintada, la película se centra en cómo la artista retrata a su modelo en plenitud, teniéndola delante'],
            ['comentario' => 'En la segunda parte del video, una vez establecida una unión sólida y afectiva entre quien pinta y quien es pintada, la película se centra en cómo la artista retrata a su modelo en plenitud, teniéndola delante']
        ]);
        return $blog->comentarios;
    }
}