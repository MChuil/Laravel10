@extends('layouts.template')

@section('title', 'Tarea ' . $task)

@section('content')

    <h1>Vista de Show</h1>
    <p>
        {{ $task }}
    </p>

@endsection
