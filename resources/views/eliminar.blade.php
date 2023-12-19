@extends("layout/plantilla")


@section("tituloPagina", "Eliminar Pelicula")

@section('contenido')
    <div class="card mt-4">
        <div class="card-header">
                <b>ELIMINAR PELICULA</b>
        </div>

        <div class="card-body">
            <p class="card-text">
                <div class="alert alert-danger" role="alert">
                    ESTAS SEGURO DE ELIMINAR ESTE REGISTRO?

                    <table class="table table-sm table-hover">

                        <thead>
                            <th>NOMBRE</th>
                            <th>AÑO</th>
                            <th>DESCRIPCION</th>
                        </thead>
        
                        <tbody>
                        
                            <tr>
                                <td>{{ $pelicula->name }}</td>
                                <td>{{ $pelicula->year }}</td>
                                <td>{{ $pelicula->description }}</td>
                            </tr>
        
                        </tbody>
        
                    </table>

                    <form action="{{ route("peliculas.destroy", $pelicula->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">REGRESAR</a>
        
                        <button class="btn btn-danger">ELIMINAR</button>
                    </form>
        
                </div>
                
            </p>

            
        </div>


    </div>

@endsection