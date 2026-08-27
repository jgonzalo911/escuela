<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


Route::get('/',HomeController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','index');
    Route::get('cursos/create','create');
    Route::get('cursos/{curso}','show');
});


/*Route::get('cursos/{curso}/{categoria?}', function($curso,$categoria=null){
    if($categoria){
        return "Bienvenido al curso $curso, de la categria $categoria";
    }else{
        return "Bienvenido al curso $curso, de la categria $categoria";
    }
}
);*/


