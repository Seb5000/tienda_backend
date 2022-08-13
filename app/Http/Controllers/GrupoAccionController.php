<?php

namespace App\Http\Controllers;

use App\Http\Requests\GrupoAccionRequest;
use App\Models\GrupoAccion;
use Illuminate\Http\Request;
use App\Http\Resources\GrupoAccionResource;

class GrupoAccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gruposCompra = GrupoAccion::paginate(10);
        return GrupoAccionResource::collection($gruposCompra);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrupoAccionRequest $request)
    {
        $request->validated();
        $grupoAccion = GrupoAccion::create($request->all());

        return new GrupoAccionResource($grupoAccion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GrupoAccion  $grupoAccion
     * @return \Illuminate\Http\Response
     */
    public function show(GrupoAccion $grupoAccion)
    {
        //$grupoAccion = $grupoAccion->with('acciones')->first();
        return new GrupoAccionResource($grupoAccion);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GrupoAccion  $grupoAccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GrupoAccion $grupoAccion)
    {
        $grupoAccion->update($request->all());

        return new GrupoAccionResource($grupoAccion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GrupoAccion  $grupoAccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(GrupoAccion $grupoAccion)
    {
        $grupoAccion->delete();

        return response()->noContent();
    }

}
