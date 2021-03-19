@extends('layout.master')

@section('title', 'Informació de la tasca')

@section('header')
    <h1>Informació de la tasca "{{ $tasca->name }}"</h1>
@endsection

@section('content')
    
    <ul>
        <li><strong>ID:</strong> {{ $tasca->id }}</li>
        <li><strong>Nom:</strong> {{ $tasca->name }}</li>
        <li><strong>Completada</strong> @if ($tasca->completed == 0)
            No
        @else
            Si
        @endif
        </li>
        <li><strong>Descripció:</strong> {{ $tasca->description }}</li>
        <li><strong>Projecte:</strong> {{ $tasca->projecte->name }}</li>
    </ul>

    <a href="/tasca/{{ $tasca->id }}/edit" class="btn btn-primary">Editar</a>

@endsection