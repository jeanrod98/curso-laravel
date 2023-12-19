@extends("layout/plantilla")

@section("tituloPagina", "Crear Pelicula")

@section('contenido')
<div class="card mt-4">
    <div class="card-header">
            <b>CREAR NUEVA PELICULA</b>
    </div>
    <div class="card-body">
        
        <form action="{{ route("peliculas.store" )}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">NOMBRE:</label>
                <input id="nombre" name="name" class="form-control" type="text" required>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">AÑO:</label>
                <input id="year" name="year" class="form-control" type="date" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">DESCRIPCION:</label>
                <input id="description" name="description" class="form-control" type="text" required>
            </div>

            <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">REGRESAR</a>

            <button class="btn btn-primary">GUARDAR</button>
        </form>

       
        
        
    </div>
</div>
    
@endsection