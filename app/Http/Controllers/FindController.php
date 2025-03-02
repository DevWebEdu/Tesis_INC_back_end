<?php

namespace App\Http\Controllers;

use App\Http\Resources\FindCollection;
use App\Models\Incidencias;
use Illuminate\Http\Request;

class FindController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  new FindCollection(Incidencias::with('app')->with('user')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    // Funcion de busqueda
    public function store(Request $request)
    {
        $query = Incidencias::with(['app', 'user']);

        // Aplicar filtro por apps_id solo si está presente en el request
        if ($request->has('apps_id')) {
            $query->where('apps_id', $request->apps_id);
        }

        // Aplicar filtro por fechas solo si ambos valores están presentes
        if ($request->has(['fecha_envio_from', 'fecha_envio_to'])) {
            $query->whereBetween('fecha_envio', [$request->fecha_envio_from, $request->fecha_envio_to]);
        }

        // Obtener los datos ordenados por fecha_envio descendente
        $data = new FindCollection($query->orderBy('fecha_envio', 'desc')->get());

        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
