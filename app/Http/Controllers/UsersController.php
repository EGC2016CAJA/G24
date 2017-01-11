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
     *     summary="Muestra un listado de usuarios",
     *     description="Muestra todas los usuarios guardados hasta el momento",
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
     *     description="Crea un nuevo usuario con los parametros deseados",
     *     produces={"application/json"},
     *     tags={"USER"},
     *     @SWG\Parameter(
     *         name="name",
     *         description="Nombre del usuario",
     *         required=true,
     *         type="string",
     *         format="string",
     *         in="formData"
     *     ),
     *     @SWG\Parameter(
     *         name="email",
     *         description="Email del usuario",
     *         required=true,
     *         type="string",
     *         format="string",
     *         in="formData"
     *     ),
     *     @SWG\Parameter(
     *         name="password",
     *         description="Contraseña del usuario",
     *         required=true,
     *         type="string",
     *         format="string",
     *         in="formData"
     *     ),
     *     @SWG\Parameter(
     *         name="age",
     *         description="Edad del usuario",
     *         required=true,
     *         type="integer",
     *         format="int",
     *         in="formData"
     *     ),
     *     @SWG\Parameter(
     *         name="gender",
     *         description="Género del usuario",
     *         required=true,
     *         type="string",
     *         format="string",
     *         in="formData"
     *     ),
     *     @SWG\Parameter(
     *         name="state",
     *         description="Estado del usuario",
     *         required=true,
     *         type="string",
     *         format="string",
     *         in="formData"
     *     ),
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

        $newUser = User::create($properties);

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
     *     description="Muestra la información del usuario con id={id}",
     *     produces={"application/json"},
     *     tags={"USER"},
     *     @SWG\Response(
     *         response=200,
     *         description="Usuario mostrado"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="Identificador de usuario",
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
     *     description="Reemplaza la información del usuario con id={id}",
     *     produces={"application/json"},
     *     tags={"USER"},
     *     @SWG\Response(
     *         response=200,
     *         description="Usuario actualizado"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="Identificador de usuario",
     *         required=true,
     *         type="integer",
     *         in="path"
     *     ),
     *     @SWG\Parameter(
     *         name="name",
     *         description="Nombre del usuario",
     *         required=true,
     *         type="string",
     *         format="string",
     *         in="formData"
     *     ),
     *     @SWG\Parameter(
     *         name="email",
     *         description="Email del usuario",
     *         required=true,
     *         type="string",
     *         format="string",
     *         in="formData"
     *     ),
     *     @SWG\Parameter(
     *         name="password",
     *         description="Contraseña del usuario",
     *         required=true,
     *         type="string",
     *         format="string",
     *         in="formData"
     *     ),
     *     @SWG\Parameter(
     *         name="age",
     *         description="Edad del usuario",
     *         required=true,
     *         type="integer",
     *         format="int",
     *         in="formData"
     *     ),
     *     @SWG\Parameter(
     *         name="gender",
     *         description="Género del usuario",
     *         required=true,
     *         type="string",
     *         format="string",
     *         in="formData"
     *     ),
     *     @SWG\Parameter(
     *         name="state",
     *         description="Estado del usuario",
     *         required=true,
     *         type="string",
     *         format="string",
     *         in="formData"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Acción no autorizada.",
     *     ),
     * )
     */
    public function update(Request $request, $id)
    {
        $properties = $request->input();

        $user = User::find($id);

        $user->update($properties);
        return response()->json(array(
            'error' => false,
            'results' => $user,
        ), 200
        );
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
     *     description="Borra el usuario con id={id}",
     *     produces={"application/json"},
     *     tags={"USER"},
     *     @SWG\Response(
     *         response=200,
     *         description="Usuario borrado"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="Identificador de usuario",
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
        $user = User::find($id);


        return response()->json(array(
            'error' => false,
            'results' => $user->delete(),
        ), 200
        );
    }
}
