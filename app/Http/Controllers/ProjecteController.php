<?php

namespace App\Http\Controllers;

use App\Models\Projecte;
use Illuminate\Http\Request;

class ProjecteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectes = Projecte::all();
        return view('projectes_index', [
            'projectes' => $projectes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projectes_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projecte = Projecte::create($request->all());
        return redirect('/projecte');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projecte  $projecte
     * @return \Illuminate\Http\Response
     */
    public function show(Projecte $projecte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projecte  $projecte
     * @return \Illuminate\Http\Response
     */
    public function edit(Projecte $projecte)
    {
        return view('projectes_edit', [
            'projecte' => $projecte,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projecte  $projecte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projecte $projecte)
    {
        $projecte->update($request->all());
        return redirect('/projecte');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projecte  $projecte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projecte $projecte)
    {
        $projecte->delete();
        return redirect('/projecte');
    }
}
