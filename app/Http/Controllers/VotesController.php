<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;


class VotesController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     *     path="/v1.0/votes",
     *     summary="Muestra el índice",
     *     produces={"application/json"},
     *     tags={"GET"},
     *     @SWG\Response(
     *         response=200,
     *         description="Muestra el índice"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Accion no autorizada",
     *     ),
     * )
     */
    public function index()
    {
        $votes = Vote::all();

        return response()->json(array(
            'error' => false,
            'results' => $votes,

        ), 200
        );
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
     *     path="/v1.0/votes",
     *     summary="Guarda el voto",
     *     produces={"application/json"},
     *     tags={"POST"},
     *     @SWG\Response(
     *         response=200,
     *         description="Voto guardado"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Accion no autorizada",
     *     ),
     * )
     */
    public function store(Request $request)
    {
        $properties = $request->input();

        $newVote = Vote::create($properties);

        return response()->json(array(
            'error' => false,
            'results' => $newVote,
            ), 200
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     *     path="/v1.0/votes/{id}",
     *     summary="Muestra el voto",
     *     produces={"application/json"},
     *     tags={"GET"},
     *     @SWG\Response(
     *         response=200,
     *         description="Voto mostrado"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="Voto",
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
        $vote = Vote::find($id);
        return response()->json(array(
            'error' => false,
            'results' => $vote,
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
    public function update(Request $request, $id)
    {
        $properties = $request->input();

        $vote = Vote::find($id);
        $vote->update($properties);


        return response()->json(array(
            'error' => false,
            'results' => $vote,
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
     *     path="/v1.0/votes/destroy/{id}",
     *     summary="Borrar el voto",
     *     produces={"application/json"},
     *     tags={"Delete"},
     *     @SWG\Response(
     *         response=200,
     *         description="Borrar el voto"
     *     ),
     *     @SWG\Parameter(
     *         name="id",
     *         description="Delete a vote",
     *         required=true,
     *         type="integer",
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
        $vote = Vote::find($id);

        $vote->delete();

        return response()->json(array(
            'error' => false,
            'results' => $vote,
            ), 200
        );
    }
}
