@extends('layouts.app')
@section('content')
<h1>Crear</h1>
<form action="{{ route('perfiles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label
">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
    <a href="{{ route('perfiles.index') }}" class="btn btn-secondary">Cancelar</a>
</form>

@endsection