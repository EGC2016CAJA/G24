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
     *     path="/v1.0/member/{id_member}/test",
     *     summary="Test assigned to user",
     *     produces={"application/json"},
     *     tags={"Member"},
     *     @SWG\Response(
     *         response=200,
     *         description="Show the tests assigned to a given user"
     *     ),
     *     @SWG\Parameter(
     *         name="access_token",
     *         description="Access token obtained through OAUth",
     *         required=true,
     *         type="string",
     *         in="query"
     *     ),
     *     @SWG\Parameter(
     *         name="id_member",
     *         description="Member identifier",
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
