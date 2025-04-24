<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Phone;
use App\Models\User;

Route::get('/', function () {
    return 'Hola perreques';
});

Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/create',[PostController::class,'create']);
Route::post('/posts',[PostController::class,'store']);
Route::get('/posts/{post}',[PostController::class,'show']);
Route::get('/posts/{post}/edit',[PostController::class,'edit']);
Route::put('/posts/{post}',[PostController::class,'update']);
Route::delete('/posts/{post}',[PostController::class,'destroy']);

Route::get('/prueba', function () {
    $user = User::create([
        'name' => 'Villa Yamil',
        'email' => 'yamil.gchu@gmail.com',
        'password' => bcrypt('12345678')
    ]);

    Phone::create([
        'number' => '123456789',
        'user_id' => $user->id
    ]);

    return 'Usuario y teléfono creados';
});

//Route::get('prueba', function());
    //return "Hola desde la ruta prueba";

    /*$post = new Post;

    $post->title = "Titulo de prueba 1";
    $post->content = "Conternido de prueba 1";
    $post->categoria = "Categoria de prueba 1";
    
    
    //buscar y modificar por ID - Find
    $post = Post::find(3);

    //buscar y modificar por otros atributos - Where
    //$post = Post::where('id','3')->first(); - first devuelve el primer registro que encuentre con esos valores

    $post -> title = "Titulo de prueba 3";
    $post -> content = "Conternido de prueba 3";
    $post -> categoria = "Categoria de prueba 3";

    $post->save();
    //recuperar mas de un registro ALL
    //$post = Post::all();
    
    //recuperar registros que cumplan condiciones
    //$post = Post::where('id','>=','2')->get(); //trae mas de un registro

    //ordenar los campos descente
    $post = Post::orderBy('id','asc')
        ->select('id','title','categoria') //muestra campos especificos
        ->take(2)//limita la cantidad de resgistros que traiga (2 primeros)
        ->get();

    return $post;*/

    // $post = Post::find(4);

    // $post -> delete();

    // return "Eliminado correctamente";

// Route::get('/{post}/{category?}', function ($post, $category = null) {

//     if ($category){
//         return "Aca se muestra el post {$post} de la categoria {$category}";
//     }

//     return "Aca se muestra el post {$post}";

// });

   