<?php

namespace App\Http\Controllers;

use App\Models\Tasca;
use App\Models\Projecte;
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
        $projectes = Projecte::all();
        return view('tasques_create', [
            'projectes' => $projectes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request['completed']) {
            $request['completed'] = 1;
        }
        else {
            $request['completed'] = 0;
        }
        $tasca = Tasca::create($request->all());
        return redirect('/tasca');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tasca  $tasca
     * @return \Illuminate\Http\Response
     */
    public function show(Tasca $tasca)
    {
        return view('tasques_show', [
            'tasca' => $tasca,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tasca  $tasca
     * @return \Illuminate\Http\Response
     */
    public function edit(Tasca $tasca)
    {
        $projectes = Projecte::all();
        return view('tasques_edit', [
            'tasca' => $tasca,
            'projectes' => $projectes,
        ]);
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
        if($request['completed']) {
            $request['completed'] = 1;
        }
        else {
            $request['completed'] = 0;
        }
        $tasca->update($request->all());
        return redirect('/tasca');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tasca  $tasca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasca $tasca)
    {
        $tasca->delete();
        return redirect('/tasca');
    }
}
