@extends('layout.master')

@section('title', 'Informació del projecte')

@section('header')
    <h1>Informació del projecte "{{ $projecte->name }}"</h1>
@endsection

@section('content')
    
    <ul>
        <li><strong>ID:</strong> {{ $projecte->id }}</li>
        <li><strong>Nom:</strong> {{ $projecte->name }}</li>
    </ul>

    <a href="/projecte/{{ $projecte->id }}/edit" class="btn btn-primary">Editar</a>

@endsection