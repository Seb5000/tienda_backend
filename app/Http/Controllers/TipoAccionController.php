<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoAccionRequest;
use App\Http\Resources\TipoAccionResource;
use App\Models\TipoAccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TipoAccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoAccion = TipoAccion::paginate(10);
        return TipoAccionResource::collection($tipoAccion);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoAccion = TipoAccion::create($request->all());

        return new TipoAccionResource($tipoAccion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoAccion  $tipoAccion
     * @return \Illuminate\Http\Response
     */
    public function show(TipoAccion $tipoAccion)
    {
        return new TipoAccionResource($tipoAccion);
    }

    public function list(TipoAccion $tipoAccion)
    {
        $tipoAccion = TipoAccion::all();
        return TipoAccionResource::collection($tipoAccion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoAccion  $tipoAccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoAccion $tipoAccion)
    {
        return $tipoAccion;
        $tipoAccion->update($request->all());
        //$producto->update($request->validated());

        return new TipoAccionResource($tipoAccion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoAccion  $tipoAccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoAccion $tipoAccion)
    {
        $tipoAccion->delete();

        return response()->noContent();
    }
}
