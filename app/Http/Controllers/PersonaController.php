<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alta(Request $request)
    {
        //dd($request->all());
        $persona = DB::table('persona')->insert([
          'nombre' => $request->nombre,
          'telefono' => $request->telefono,
          'correo' => $request->correo,
          'comentarios' => $request->comentarios,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' =>date('Y-m-d H:i:s')
        ]);

        return view ('welcome')->with('mensaje', 'Los datos han sido actualizados');
    }

}
