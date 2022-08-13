<?php

namespace App\Http\Controllers;

use App\Models\Accion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accion  $accion
     * @return \Illuminate\Http\Response
     */
    public function show(Accion $accion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accion  $accion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accion $accion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accion  $accion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accion $accion)
    {
        //
    }

    public function guardarGrupo(Request $request)
    {
        $grupoAccionId = $request->id;
        foreach($request->Acciones as $item){
            $objetoAccion = (object)$item;
            if(isset($objetoAccion->id)){
                $accion = Accion::where('id', $objetoAccion->id)->first();
                if(isset($objetoAccion->borrar)){
                    $accion->delete();
                    continue;
                }
            }else{
                $accion = new Accion();
            }
            $accion->Producto = $objetoAccion->Producto;
            $accion->GrupoAccion = $grupoAccionId;
            $accion->Cantidad = $objetoAccion->Cantidad;
            $accion->HMonto = $objetoAccion->HMonto;
            $accion->FechaAccion = $objetoAccion->FechaAccion;
            $accion->save();
        }
        return "Exito";
    }

    public function listaAcciones(Request $request)
    {
        $acciones = DB::table('Accion')
                        ->select('Accion.*', 'Producto.Nombre AS Nombre',
                        'Producto.Codigo AS Codigo', 'Producto.Descripcion AS Descripcion',
                        'Producto.PrecioCompra AS PrecioCompra', 'Producto.PrecioVenta AS PrecioVenta',
                        'Producto.Foto AS Foto')
                        ->join('Producto', 'Producto.id', 'Accion.Producto')
                        ->where('Accion.GrupoAccion', $request->GrupoAccion)
                        ->get();
        return response([
            'data' => $acciones,
        ]);
    }
}
