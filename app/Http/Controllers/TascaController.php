<?php

namespace App\Http\Controllers;

use App\Models\Tasca;
use Illuminate\Http\Request;

class TascaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasques = Tasca::all();
        return view('tasques_index', [
            'tasques' => $tasques,
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tasca  $tasca
     * @return \Illuminate\Http\Response
     */
    public function show(Tasca $tasca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tasca  $tasca
     * @return \Illuminate\Http\Response
     */
    public function edit(Tasca $tasca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tasca  $tasca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tasca $tasca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tasca  $tasca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasca $tasca)
    {
        //
    }
}
