<?php

namespace App\Http\Controllers;

use App\Http\Requests\DashboardRequest;
use App\Http\Resources\DashboardCollection;
use App\Models\Incidencias;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        

       return new DashboardCollection(Incidencias::with('app')->with('user')->where('estado','atendiendo')->orderBy('created_at','desc')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DashboardRequest $request)
    {
        $request->validated();

        $incidencia[] = [
            'id' => $request->id,
            'users_id' => Auth::user()->id,
            'fecha_envio' => Carbon::parse(Carbon::now())->setTimezone('America/Lima') ,
            'resumen' => null,
            'apps_id' => $request->apps_id,
            'nota'=> null,
            'estado' => 'Atendiendo',
            'fecha_atencion' => null, 
            'observacion' => null,
            'created_at' => Carbon::parse(Carbon::now())->setTimezone('America/Lima')
        ];

        Incidencias::insert($incidencia);

        return [
         'data' =>$incidencia  ,
        'message' => 'incidencia ingresada para atender'
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        /*new DashboardCollection(Incidencias::with('app')->with('user')->where('id',$id)->get());*/
        return [
            'data' =>Incidencias::with('app')->with('user')->where('id',$id)->get(),
            'message' => 'Hola desde show'
        ];
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
        return [
            'data' => Incidencias::where('id',$id)->delete(), // returns 1 
            'message' => 'Se borro el ticket'
        ];   
    }
}
