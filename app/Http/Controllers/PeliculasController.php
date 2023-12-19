<?php

namespace App\Http\Controllers;

use App\Models\Peliculas;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    // pagina de inicio
    public function index()
    {
        //obtener datos de la bd
        $peliculas = Peliculas::orderBy("name", "asc")->paginate(2);
        return view('home', compact("peliculas"));
    }

   // formulario para registro
    public function create()
    {
        //
        return view("crearPelicula");
    }

    // almacena registro a la bd
    public function store(Request $request)
    {
        //

        $peliculas = new Peliculas();
        $peliculas->name = $request->post("name");
        $peliculas->description = $request->post("description");
        $peliculas->year = $request->post("year"); 

        $peliculas->save();

        return redirect()->route("peliculas.index")->with("success", "Agregado correctamente!");

     }

    // muetsra un registro de la bd
    public function show($id)
    {
        //
        $pelicula = Peliculas::find($id);

        return view("eliminar", compact("pelicula"));
    }

    // formulario para editar un registro seleccionado
    public function edit($id)
    {
        //

        $pelicula = Peliculas::find($id);

        return view("actualizarPelicula", compact("pelicula"));

    }

    // actualiza registro de la bd
    public function update(Request $request, $id)
    {
        //

        $pelicula = Peliculas::find($id);
        $pelicula->name = $request->post("name");
        $pelicula->description = $request->post("description");
        $pelicula->year = $request->post("year"); 
        $pelicula->save();

        return redirect()->route("peliculas.index")->with("success", "Actualizado correctamente!");

    }

    //elimina un registro de la bd
    public function destroy($id)
    {
        //

        $pelicula = Peliculas::find($id);
        $pelicula->delete();

        return redirect()->route("peliculas.index")->with("success", "Eliminado con exito!");
    }
}
