@extends('layouts.plantilla')

@section('title', 'Cursos Edit')

@section('content')
    <h1>En esta pagina podras editar un curso</h1>
    
    <form action="{{ route('cursos.update', $curso) }}" method="POST">

        @csrf
        @method('PUT')
        
        <label>
            Nombre: 
            <br>
            <input value="{{ old('name', $curso->name) }}" type="text" name="name">
        </label>

        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripcion: 
            <br>
            <textarea name="descripcion" rows="5">{{ old('descripcion', $curso->description) }}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label for="">
            Categoria: 
            <br>
            <input value="{{ old('categoria', $curso->category) }}" type="text" name="categoria">
        </label>

        @error('categoria')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar formulario</button>

    </form>
@endsection