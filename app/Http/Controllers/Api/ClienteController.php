<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clientes;

class ClienteController extends Controller
{
   
    public function index()
    {
        $clientes = Clientes::all();
        return $clientes;
    }

   
    public function store(Request $request)
    {
        $cliente = new Clientes;
        $cliente ->nombres = $request->nombres;
        $cliente ->correo = $request->correo;
        $cliente ->telefono = $request->telefono;
        $cliente ->direccion = $request->direccion;
        $cliente ->ciudad = $request->ciudad;
        $cliente ->provincia = $request->provincia;
        $cliente ->pais = $request->pais;
        $cliente ->preferencia_propiedad = $request->preferencia_propiedad;
        $cliente ->estado = $request->estado;

        $cliente-> save();
        return "cliente creado con exito...!";
    }

    public function show($id)
    {
        $cliente = Clientes::find($id);
        return $cliente;
    }

   
    public function update(Request $request, $id)
    {
        $cliente = Clientes::findOrFail($request->id);
        $cliente ->nombres = $request->nombres;
        $cliente ->correo = $request->correo;
        $cliente ->telefono = $request->telefono;
        $cliente ->direccion = $request->direccion;
        $cliente ->ciudad = $request->ciudad;
        $cliente ->provincia = $request->provincia;
        $cliente ->pais = $request->pais;
        $cliente ->preferencia_propiedad = $request->preferencia_propiedad;
        $cliente ->estado = $request->estado;

        $cliente-> save();
        return $cliente;
    }

   
    public function destroy($id)
    {
        $cliente = Clientes::destroy($id);
        return 'Eliminado';
    }

    public function inactivated(Request $request, $id)
    {
        $cliente = Clientes::findOrFail($request->id);
        $cliente ->estado = "I";

        $cliente-> save();
        return $cliente;
    }
}
