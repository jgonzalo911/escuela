@extends('layouts.plantilla')
@section('title','Cursos Create')
@section('content')
<style>
    .fomrInput{
        width=400px;
        margin:20px 0;
    }

    .formInput label{
        dislpay:block;
        margin-bottom:10px;
        width:100%;
    }

    .formInput input,
    .formInput textarea{
        width:100%;
    }
</style>
    <h1>En esta pagin se podra crear un curso</h1>
    <form action="{{route('cursos.dataFormCursos')}}" method="POST">
        @csrf
        <div class="formInput">
            <label for="nombres">Nombre:</label>
            <input type="text" name="nombre" value="">
        </div>
        <div class="formInput">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" rows=""></textarea>
        </div>
        <div class="formInput">
            <label for="categria">Categria:</label>
            <input type="text" name="categoria" value="">
        </div>
        <div class="formInput">
            <button type="submit">Enviar</button>
    </form>

@endsection
