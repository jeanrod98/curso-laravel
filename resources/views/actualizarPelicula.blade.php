@extends("layout/plantilla")

@section("tituloPagina", "Actualizar Pelicula")

@section('contenido')
    <div class="card mt-4">
        <div class="card-header">
                <b>ACTUALIZAR PELICULA</b>
        </div>
        <div class="card-body">
            
            <form action="{{ route("peliculas.update", $pelicula->id) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="nombre" class="form-label">NOMBRE:</label>
                    <input id="nombre" name="name" class="form-control" type="text" required value="{{ $pelicula->name}}">
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">AÑO:</label>
                    <input id="year" name="year" class="form-control" type="date" required value="{{ $pelicula->year}}">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">DESCRIPCION:</label>
                    <input id="descripcion" name="description" class="form-control" type="text" required value="{{ $pelicula->description}}">
                </div>

                <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">REGRESAR</a>

                <button class="btn btn-warning">ACTUALIZAR</button>
            </form>

        
            
            
        </div>
    </div>
@endsection