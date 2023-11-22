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
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre">
                </p>
                <p>
                    <label for="description">Descripcion</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                </p>
                <p>
                    <label for="priority">Prioridad</label>
                    <select name="priority" id="" class="form-control">
                        <option value="1">Bajo</option>
                        <option value="2">Medio</option>
                        <option value="3">Alto</option>
                    </select>
                </p>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>

@endsection