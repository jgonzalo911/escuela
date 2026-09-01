<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


Route::get('/',HomeController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    Route::post('cursos','dataFormCursos')->name('cursos.dataFormCursos');
    //Route::get('cursos/{curso}','show')->name('cursos.show');
    Route::get('cursos/{id}','show')->name('cursos.show');
    Route::get('cursos/{id}/edit','edit')->name('cursos.edit');


});


/*Route::get('cursos/{curso}/{categoria?}', function($curso,$categoria=null){
    if($categoria){
        return "Bienvenido al curso $curso, de la categria $categoria";
    }else{
        return "Bienvenido al curso $curso, de la categria $categoria";
    }
}
);*/


