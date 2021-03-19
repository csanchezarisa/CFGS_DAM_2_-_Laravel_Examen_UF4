@extends('layout.master')

@section('title', 'Editar projecte')

@section('header')
    <h1>Editar el projecte "{{ $projecte->name }}"</h1>
@endsection

@section('content')
    
    <form action="/projecte/{{ $projecte->id }}" method="post" class="was-validated">

        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="name">Nom del projecte:</label>
          <input type="text" class="form-control" placeholder="Nom del projecte" id="name" name="name" value="{{ $projecte->name }}" required>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-danger">Reiniciar formulari</button>
    </form>

@endsection