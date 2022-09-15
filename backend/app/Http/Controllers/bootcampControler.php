<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;

class bootcampControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(["success" => true, "data" => Bootcamp::all()], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Vertificar los datos del payload
        //Guardar el nuevo bootcamp
        return response()->json(["success" => true, "data" => Bootcamp::create($request->all())], 201);
        // $bootcamp = new Bootcamp;
        // $bootcamp->name = $request->name;
        // $bootcamp->description = $request->description;
        // $bootcamp->webside = $request->webside;
        // $bootcamp->phone = $request->phone;
        // $bootcamp->average_rating = $request->average_rating;
        // $bootcamp->average_cost = $request->average_cost;
        // $bootcamp->user_id = $request->user_id;
        // $bootcamp->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(["success" => true, "data" => Bootcamp::find($id)], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //1. Seleccionar el bootcamp a actualizar
        $b = Bootcamp::find($id);
        //2. Actualizar el bootcamp
        $b->update($request->all());
        //3. Enviar el bootcamp actualizado
        return response()->json(["success" => true, "data" => $b], 200);
        // $bootcamp = Bootcamp::findOrFail($id);
        // $bootcamp->name = $request->name;
        // $bootcamp->description = $request->description;
        // $bootcamp->webside = $request->webside;
        // $bootcamp->phone = $request->phone;
        // $bootcamp->average_rating = $request->average_rating;
        // $bootcamp->average_cost = $request->average_cost;
        // $bootcamp->user_id = $request->user_id;
        // $bootcamp->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = Bootcamp::find($id);
        return response()->json(["success" => true, "data" => $b], 200);

    }
}
