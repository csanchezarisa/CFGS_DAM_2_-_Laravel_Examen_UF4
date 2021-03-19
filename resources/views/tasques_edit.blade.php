@extends('layout.master')

@section('title', 'Editar una tasca')

@section('header')
    <h1>Editar la tasca "{{ $tasca->name }}"</h1>
@endsection

@section('content')
    
    <form action="/tasca/{{ $tasca->id }}" method="post" class="was-validated">

        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="name">Nom de la tasca:</label>
          <input type="text" class="form-control" placeholder="Nom de la tasca" id="name" name="name" value="{{ $tasca->name }}" required>
        </div>
        <div class="form-group">
          <label for="completed">Completada:</label>
          <input type="checkbox" class="form-control" id="completed" name="completed"
                @if ($tasca->completed == 1)
                    checked
                @endif
          required>
        </div>
        <div class="form-group">
          <label for="name">Descripció:</label>
          <textarea name="description" id="description" cols="30" rows="10" placeholder="Descripció" class="form-control" required>
{{ $tasca->description }}
          </textarea>
        </div>
        <div class="form-group">
          <label for="projecte_id">Projecte:</label>
          
            <select id="projecte_id" name="projecte_id" class="form-control" required>
                @foreach ($projectes as $projecte)
                    <option value="{{ $projecte->id }}"
                        @if ($projecte->id === $tasca->projecte->id)
                            selected="selected"
                        @endif
                        >{{ $projecte->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-danger">Reiniciar formulari</button>
    </form>

@endsection