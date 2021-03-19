@extends('layout.master')

@section('title', 'Llistat de projectes')

@section('header')
    <h1>Llistat de projectes registrats</h1>
@endsection

@section('content')
    
    <table class="table table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>Nom projecte</th>
            <th>Número de tasques assignades</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($projectes as $projecte)
                <tr>
                    <td>{{ $projecte->id }}</td>
                    <td>{{ $projecte->name }}</td>
                    <td>{{ $projecte->tasca->count() }}</td>
                    <td><a href="/projecte/{{ $projecte->id }}" class="btn btn-primary">Mostrar projecte</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection