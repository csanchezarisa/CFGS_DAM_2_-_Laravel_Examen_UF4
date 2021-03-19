@extends('layout.master')

@section('title', 'Crear un projecte')

@section('header')
    <h1>Crear un nou projecte</h1>
@endsection

@section('content')
    
    <form action="/projecte" method="post" class="was-validated">

        @csrf

        <div class="form-group">
          <label for="name">Nom del projecte:</label>
          <input type="text" class="form-control" placeholder="Nom del projecte" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-danger">Reiniciar formulari</button>
    </form>

@endsection