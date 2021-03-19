@extends('layout.master')

@section('title', 'Crear una tasca')

@section('header')
    <h1>Crear una nova tasca</h1>
@endsection

@section('content')
    
    <form action="/tasca" method="post" class="was-validated">

        @csrf

        <div class="form-group">
          <label for="name">Nom de la tasca:</label>
          <input type="text" class="form-control" placeholder="Nom de la tasca" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="completed">Completada:</label>
          <input type="checkbox" class="form-control" id="completed" name="completed" required>
        </div>
        <div class="form-group">
          <label for="name">Descripció:</label>
          <textarea name="description" id="description" cols="30" rows="10" placeholder="Descripció" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label for="projecte_id">Projecte:</label>
          
            <select id="projecte_id" name="projecte_id" class="form-control" required>
                @foreach ($projectes as $projecte)
                    <option value="{{ $projecte->id }}">{{ $projecte->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-danger">Reiniciar formulari</button>
    </form>

@endsection