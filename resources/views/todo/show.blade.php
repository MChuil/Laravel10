@extends('layouts.template')

@section('title', 'Tarea ' . $task)

@section('content')

    <h1>Tarea numero {{ $task->id }}</h1>
    <p> Nombre {{ $task->name }}</p>
    <p> Descripción {{ $task->description }}</p>
    <p> Prioridad {{ $task->priority }}</p>
    <p> Fecha de creación:  {{ $task->created_at }}</p>

    <p>
        <a href="{{ route('todo.index')}}" class="btn btn-secondary">Volver a inicio</a>
        <a href="{{ route('todo.edit', $task)}}" class="btn btn-primary">Editar tarea</a>
        <form action="{{ route('todo.destroy', $task)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </p>
@endsection
