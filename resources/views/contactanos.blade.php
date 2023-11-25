@extends('layouts.template')

@section('title', 'Contactanos')

@section('content')

    <h1>Contactanos</h1>
    <p>Nos gustaria saber de ti, mandanos un mensaje...</p>

    <form action="{{route('contactanos.store')}}" method="post">
        {{ session('msj') }}
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
            {{ $message }}
        @enderror
        <br>
        <label for="email">Correo</label>
        <input type="email" name="email" value="{{old('email')}}">
        @error('email')
            {{ $message }}
        @enderror
        <br>
        <label for="message">Mensaje</label>
        <textarea name="message" id="" cols="30" rows="5">{{old('message')}}</textarea>
        @error('message')
            {{ $message }}
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection