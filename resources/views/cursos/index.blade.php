@extends('layouts.plantilla')
@section('title','Cursos')
@section('content')
<h1>Bienvenido a la pagina de cursos</h1>
<a href="{{route('cursos.create')}}">Crear Curso</a>
<ul>
    @foreach($cursos as $curso)
    <li>
        <!--{{$curso->nombre}}-->
        <a href="{{route('cursos.show',$curso->id)}}">
            {{$curso->nombre}}
        </a>
    </li>
    @endforeach
</lu>
{{$cursos->links()}}
@endsection


