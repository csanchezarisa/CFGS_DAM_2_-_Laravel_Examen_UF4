@extends('layout.master')

@section('title', 'Llistat de tasques')

@section('header')
    <h1>Llistat de tasques registrades</h1>
@endsection

@section('content')
    
    <table class="table table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>Nom tasca</th>
            <th>Completada</th>
            <th>Descripció</th>
            <th>Nom del projecte</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($tasques as $tasca)
                <tr>
                    <td>{{ $tasca->id }}</td>
                    <td>{{ $tasca->name }}</td>
                    <td>
                        @if ($tasca->completed == 0)
                            No
                        @else
                            Si
                        @endif
                    </td>
                    <td>{{ $tasca->description }}</td>
                    <td><a href="/projecte/{{ $tasca->projecte->id }}">{{ $tasca->projecte->name }}</a></td>
                    <td><a href="/tasca/{{ $tasca->id }}" class="btn btn-primary">Mostrar tasca</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection