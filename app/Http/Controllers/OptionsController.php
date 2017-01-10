<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class OptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     *     path="/v1.0/options",
     *     summary="Muestra el índice",
     *     produces={"application/json"},
     *     tags={"OPTION"},
     *     @SWG\Response(
     *         response=200,
     *         description="Muestra un listado de Opciones"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Accion no autorizada",
     *     ),
     * )
     */
    public function index()
    {
        $results = Option::with('votes')->get();
        return response()->json(array(
            'error' => false,
            'data' => $results,
        ),200);
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Post(
     *     path="/v1.0/options",
     *     summary="Guarda la opcion",
     *     produces={"application/json"},
     *     tags={"OPTION"},
     *     @SWG\Response(
     *         response=200,
     *         description="Opcion guardada"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Accion no autorizada",
     *     ),
     * )
     */
    /**
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $properties = $request->input();

        $newOption = Option::create($properties);

        return response()->json(array(
            'error' => false,
            'results' => $newOption,
        ), 200
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     *     path="/v1.0/options/{id}",
     *     summary="Muestra la opcion",
     *     produces={"application/json"},
     *     tags={"OPTION"},
     *     @SWG\Response(
     *         response=200,
     *         description="Opcion mostrada"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="Opcion",
     *         required=true,
     *         type="integer",
     *         format="int",
     *         in="path"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Accion no autorizada",
     *     ),
     * )
     */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Put(
     *     path="/v1.0/options/{id}",
     *     summary="Actualizar la opcion",
     *     produces={"application/json"},
     *     tags={"OPTION"},
     *     @SWG\Response(
     *         response=200,
     *         description="Opcion actualizada"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="Option",
     *         required=true,
     *         type="integer",
     *         in="path"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Acción no autorizada.",
     *     ),
     * )
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Delete(
     *     path="/v1.0/options/{id}",
     *     summary="Borrar la opción",
     *     produces={"application/json"},
     *     tags={"OPTION"},
     *     @SWG\Response(
     *         response=200,
     *         description="Opción borrada"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="option",
     *         required=true,
     *         type="string",
     *         in="path"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     ),
     * )
     */

    public function destroy($id)
    {
        //
    }
}
