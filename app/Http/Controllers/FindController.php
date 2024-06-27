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
    public function store(Request $request)
    {
        $apps_id =$request->apps_id;
        $fecha_envio_from = $request->fecha_envio_from ; 
        $fecha_envio_to = $request->fecha_envio_to ; 
         if ($request->apps_id){
            $data = new FindCollection(Incidencias::with('app')->with('user')->where('apps_id',$apps_id)->whereBetween('fecha_envio',[$fecha_envio_from,$fecha_envio_to])->orderBy('fecha_envio','asc')->get());
         }else{
            $data = new FindCollection(Incidencias::with('app')->with('user')->whereBetween('fecha_envio',[$fecha_envio_from,$fecha_envio_to])->orderBy('fecha_envio','asc')->get());
         };

        
        return [
            'data' =>  $data
        ];
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
