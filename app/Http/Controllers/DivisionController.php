<?php

namespace App\Http\Controllers;

use App\division;
use Illuminate\Http\Request;
use App\Http\Resources\division as DivisionResource;
class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllDivisions(){
        $divisions = Division::all();
        return response()->json(['divisions' => $divisions]); 
        
    }
    public function createDivision(Request $request) {
        $divisions = new Division;
        $divisions->nombre = $request->nombre;              
        $divisions->embajador = $request->embajador;
        $divisions->save();
  
        return response()->json([
          "message" => "Division creada con éxito"
        ], 201);
      }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $divisions = new Division;
        $divisions->nombre = $request->nombre;              
        $divisions->embajador = $request->embajador;
        $divisions->save();
  
        return response()->json([
          "message" => "Division creada con éxito"
        ], 201);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(division $division)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\division  $division
     * @return \Illuminate\Http\Response
     */
    public function edit(division $division)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\division  $division
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, division $division)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy(division $division)
    {
        //
    }
}
