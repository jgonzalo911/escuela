@extends('layouts.plantilla')
@section('title','Curso'.$curso->nombre)
@section('content')
<h1>Bienvenido al curso: {{$curso->nombre}}</h1>

<p><a href="{{route('cursos.index')}}">Volver a cursos</a></p>

<p>Nombre del curso: {{$curso->nombre}}</p>
<p>Descripcion del curso: {{$curso->descripcion}}</p>
<p>Categoria del curso: {{$curso->categoria}}</p>

<p><a href="{{route('cursos.edit',$curso->id)}}">Editar curso</a></p>

@endsection
