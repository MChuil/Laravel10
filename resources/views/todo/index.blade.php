@extends('layouts.template')

@section('title', 'Bienvenido')

@section('content')

    <h1>Bienvenido a TODO List</h1>
    <a href="{{route('todo.create')}}" class="btn btn-primary">Crear nueva tarea</a>
    <ul>
        @foreach($tasks as $task)
            <li>
                <a href="{{ route('todo.show', $task) }}">
                    {{ $task->name }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $tasks->links() }}
@endsection