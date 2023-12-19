@extends("layout/plantilla")

@section("tituloPagina", "CRUD con laravel 10")

@section("contenido")

    <div class="card mt-4">
        <div class="card-header">
                <b>CRUD CON LARAVEL 10 Y MYSQL</b>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-sm-12">
                    @if ( $mensaje = Session::get("success"))

                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>
                        
                    @endif
                </div>
            </div>
            
        <a href="{{ route('peliculas.create') }}" class="btn btn-primary">AGREGAR PELICULA</a>

            <div class="table table-responsive mt-4">

            <table class="table table-bordered">

                <thead>
                    <th>NOMBRE</th>
                    <th>AÑO</th>
                    <th>DESCRIPCION</th>
                </thead>

                <tbody>
                    
                    @foreach ($peliculas as $item) 
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->year }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="{{ route("peliculas.edit", $item->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fa-solid fa-pen-nib"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route("peliculas.show", $item->id) }}" class="btn btn-sm btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>

                        </tr>

                    @endforeach
                    
                </tbody>

            </table>

            </div>
            
            {{-- Paginacion  --}}
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    {{ $peliculas->links() }}

                </div>
            </div>
            
        </div>
    </div>

@endsection