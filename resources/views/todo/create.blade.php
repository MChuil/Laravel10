@extends('layouts.template')

@section('title', 'Nueva tarea')

@section('content')

<h1 class="text-center">Nueva Tarea</h1>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="{{ route('todo.store')}}" method="post">
                @csrf
                <p>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre" value="{{ old("name")}}">
                    @error('name')
                        {{ $message }}
                    @enderror
                </p>
                <p>
                    <label for="description">Descripcion</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control">{{ old("description") }}</textarea>
                    @error('description')
                        {{ $message }}
                    @enderror
                </p>
                <p>
                    <label for="priority">Prioridad</label>
                    <select name="priority" id="" class="form-control">
                        <option value="" disabled selected>Seleccionar</option>
                        <option value="1">Bajo</option>
                        <option value="2">Medio</option>
                        <option value="3">Alto</option>
                    </select>
                    @error('priority')
                        {{ $message }}
                    @enderror
                </p>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>

@endsection