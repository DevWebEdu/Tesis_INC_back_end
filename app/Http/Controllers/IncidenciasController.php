<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncidenciasRequest;
use App\Http\Resources\IncidenciasCollection;
use App\Models\Incidencias;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IncidenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return new IncidenciasCollection(Incidencias::with('app')->with('user')->orderBy('updated_at','desc')->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IncidenciasRequest $request)
    {
       

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IncidenciasRequest $request, string $id)
    {
        $data = $request->validated();

        $updating = DB::table('incs')
                   ->where('id',$id)
                    ->update([  
                                'resumen' => $request->resumen,
                                'nota'=> $request->nota,
                                'estado' => 'Resuelto',
                                'fecha_atencion' => Carbon::parse(Carbon::now())->setTimezone('America/Lima'), 
                                'observacion' => $request->observacion,
                                'updated_at' => Carbon::parse(Carbon::now())->setTimezone('America/Lima')
                            ]);


        return [
            'message' => 'Ticket resuelto correctamente!!!'
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
