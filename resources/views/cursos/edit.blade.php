@extends('layouts.plantilla')
@section('title','Cursos Edit')
@section('content')
    <h1>En esta pagina se podra editar cursos</h1>
    <p>Curso a editar: {{$curso->nombre}}</p>
@endsection