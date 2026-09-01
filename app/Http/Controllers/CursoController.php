<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id','desc')->paginate(10);
        //return $cursos;
        return view('cursos.index',compact('cursos'));

    }

    public function create(){
        return view('cursos.create');

    }

    public function dataFormCursos(Request $request){

        $curso=new Curso();

        $curso->nombre=$request->nombre;
        $curso->descripcion=$request->descripcion;
        $curso->categoria=$request->categoria;

        $curso->save();
        //return $request;
        return redirect()->route('cursos.show',$curso->id);
        
    }

    /*public function show($curso){
        return view('cursos.show',['curso'=>$curso]);

    }*/

        public function show($id){
            $curso = Curso::find($id);
            //return $curso;
            return view('cursos.show',['curso'=>$curso]);
        }

        public function edit($id){
            $curso = Curso::find($id);
            //return $curso;
            return view('cursos.edit',compact('curso'));

        }

        public function update(Request $request,$id){
            $curso=Curso::find($id);
            $curso->nombre=$request->nombre;
            $curso->descripcion=$request->descripcion;
            $curso->categoria=$request->categoria;

            $curso->save();
            //return $request->all();
            //redirect
            return redirect()->route('cursos.show',$curso->id);

        }
}
