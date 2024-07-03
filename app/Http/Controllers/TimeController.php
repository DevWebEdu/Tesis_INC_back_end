<?php

namespace App\Http\Controllers;

use App\Models\Timings;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $time[] = [
            'descripcion' => uuid_create(),
            'origen' => $request->origen,
            'tiempo' => $request->tiempo
        ];


        $insertData = Timings::insert($time);

        return [
            'result' => $insertData,
            'data'     => $time,
        ];
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
