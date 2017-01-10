<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     *     path="/v1.0/users",
     *     summary="Muestra el índice",
     *     produces={"application/json"},
     *     tags={"USER"},
     *     @SWG\Response(
     *         response=200,
     *         description="Muestra un listado de usuarios"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Accion no autorizada",
     *     ),
     * )
     */
    public function index()
    {
        $results = User::all();
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
     *     path="/v1.0/users",
     *     summary="Guarda el usuario",
     *     produces={"application/json"},
     *     tags={"USER"},
     *     @SWG\Response(
     *         response=200,
     *         description="Usuario guardado"
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

        $newUser = Survey::create($properties);

        return response()->json(array(
            'error' => false,
            'results' => $newUser,
        ), 200
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     *     path="/v1.0/users/{id}",
     *     summary="Muestra el usuario",
     *     produces={"application/json"},
     *     tags={"USER"},
     *     @SWG\Response(
     *         response=200,
     *         description="Usuario mostrado"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="Usuario",
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
        $results = User::with('votes')->find($id);
        return response()->json(array(
            'error' => false,
            'data' => $results,
        ),200);
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
     *     path="/v1.0/users/{id}",
     *     summary="Actualizar el usuario",
     *     produces={"application/json"},
     *     tags={"VOTE"},
     *     @SWG\Response(
     *         response=200,
     *         description="Usuario actualizado"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="Usuario",
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
     *     path="/v1.0/users/{id}",
     *     summary="Borrar el usuario",
     *     produces={"application/json"},
     *     tags={"USER"},
     *     @SWG\Response(
     *         response=200,
     *         description="Usuario borrado"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="User",
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
    public function destroy($id)
    {
        //
    }
}
