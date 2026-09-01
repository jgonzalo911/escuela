@extends('layouts.plantilla')
@section('title','Cursos Edit')
@section('content')
    <h1>En esta pagina se podra editar cursos</h1>
    <p>Curso a editar: {{$curso->nombre}}</p>

    <form action="{{route('cursos.update',$curso->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="formInput">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{$curso->nombre}}">
        </div>
        <div class="formInput">
            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
        </div>
        <div class="formInput">
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </div>
        <div class="formInput">
            <button type="submit">Actualizar Curso</button>
        </div>
</form>
@endsection
<style>
.formInput{
    width:400px ;
    margin:20px 0;
}

.formInput label{
    display: block;
    margin-bottom:10px;
    width: 100%;
}

.formInput input,
.formInput textarea{
    width:100%;
}
</style>
