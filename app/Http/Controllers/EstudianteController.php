<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
   public function index()
   {
      $estudiantes = Estudiantes::orderBy('nombre', 'asc')->paginate();

      return view('estudiantes.index', compact('estudiantes'));
   }

   //........................................
   public function show($id)
   {
      return view(
         'estudiantes.show',
         ['estudiantes' => Estudiantes::findOrFail($id)]
      );
   }
   //....................................
   public function create()
   {
      return view(
         'estudiantes.create',
         ['estudiantes' => new Estudiantes]
      );
   }
   //....................................
   public function store()
   {
      $arr_campo = request()->validate(
         [
            'nombre' => 'required|min:2',
            'apellido' => 'required',
            'direccion' => 'required',
            'grado' => 'required',
            'genero' => 'required'
         ],

         [
            'nombre.required' => 'Escriba su Nombre',
            'apellido.required' => 'Escriba su Apellido',
            'direccion.required' => 'Escriba su Dirección',
            'grado.required' => 'Escriba su Grado',
            'genero.required' => 'Escriba su Genero'
         ]
      );

      Estudiantes::create($arr_campo);

      return redirect()->route('estudiantes');
   }
   //....................................
   public function edit(Estudiantes $Estudiantes)
   {
      return view(
         'estudiantes.edit',
         ['estudiantes' => $Estudiantes]
      );
   }
   //....................................
   public function update(Estudiantes $Estudiantes)
   {
      $arr_campo = request()->validate(
         [
            'nombre' => 'required|min:2',
            'apellido' => 'required',
            'direccion' => 'required',
            'grado' => 'required',
            'genero' => 'required'
         ],

         [
            'nombre.required' => 'Escriba su Nombre',
            'apellido.required' => 'Escriba su Apellido',
            'direccion.required' => 'Escriba su Dirección',
            'grado.required' => 'Escriba su Grado',
            'genero.required' => 'Escriba su Genero'
         ]
      );

      $Estudiantes->update(
         ['nombre' => request('nombre'),
         'apellido' => request('apellido'),
         'direccion' => request('direccion'),
         'grado' => request('grado'),
         'genero' =>request('genero')]
      );
      //Estudiantes::create($arr_campo);

      return redirect()->route('estudiantes');
   }
   public function destroy(Estudiantes $Estudiantes)
   {
      $Estudiantes->delete();

      return redirect()->route('estudiantes');
   }
}
