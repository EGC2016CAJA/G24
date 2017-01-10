<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     *     path="/v1.0/surveys",
     *     summary="Muestra un listado con todas las encuestas",
     *     description="Muestra todas las encuestas guardadas hasta el momento",
     *     produces={"application/json"},
     *     tags={"SURVEY"},
     *     @SWG\Response(
     *         response=200,
     *         description="Muestra un listado con todas las encuestas"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Accion no autorizada",
     *     ),
     * )
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Survey::with(array(
            'options',
            'options.votes',
        ))->get();
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
     *     path="/v1.0/surveys",
     *     summary="Guarda la encuesta",
     *     description="Crea una nueva encuesta con los parametros deseados",
     *     produces={"application/json"},
     *     tags={"SURVEY"},
     *     @SWG\Parameter(
     *         name="name",
     *         description="Nombre de la encuesta",
     *         required=true,
     *         type="string",
     *         format="string",
     *         in="formData"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Encuesta guardada"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Accion no autorizada",
     *     ),
     * )
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $properties = $request->input();

        $newSurvey = Survey::create($properties);

        return response()->json(array(
            'error' => false,
            'results' => $newSurvey,
        ), 200
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     *     path="/v1.0/surveys/{id}",
     *     summary="Muestra la encuesta",
     *     description="Muestra la información de la encuesta con id={id}",
     *     produces={"application/json"},
     *     tags={"SURVEY"},
     *     @SWG\Response(
     *         response=200,
     *         description="Encuesta mostrada"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="Encuesta",
     *         required=true,
     *         type="integer",
     *         format="int",
     *         in="path"
     *     ),
     *     @SWG\Parameter(
     *         name="name",
     *         description="Nombre de la encuesta",
     *         required=true,
     *         type="string",
     *         format="string",
     *         in="formData"
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
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $survey = Survey::find($id);
        return response()->json(array(
            'error' => false,
            'results' => $survey,
        ), 200
        );
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
     *     path="/v1.0/surveys/{id}",
     *     summary="Actualizar la encuesta",
     *     description="Reemplaza la información de la encuesta con id={id}",
     *     produces={"application/json"},
     *     tags={"SURVEY"},
     *     @SWG\Response(
     *         response=200,
     *         description="Encuesta actualizada"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="Encuesta",
     *         required=true,
     *         type="integer",
     *         in="path"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Operación no autorizada.",
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
     *     path="/v1.0/survey/{id}",
     *     summary="Borrar la encuesta",
     *     description="Borra la encuesta con id={id}",
     *     produces={"application/json"},
     *     tags={"SURVEY"},
     *     @SWG\Response(
     *         response=200,
     *         description="Encuesta borrada"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="Encuesta",
     *         required=true,
     *         type="integer",
     *         in="path"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Operación no autorizada.",
     *     ),
     * )
     */
    public function destroy($id)
    {
        //
    }
}
