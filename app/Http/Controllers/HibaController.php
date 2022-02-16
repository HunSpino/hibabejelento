<?php

namespace App\Http\Controllers;

use App\Models\Hiba;
use Illuminate\Http\Request;

class HibaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hibas = Hiba::orderBy('felhasznalo')->get();
        return view('hibas.index',['hibas'=>$hibas]);
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
     * @param  \App\Models\Hiba  $hiba
     * @return \Illuminate\Http\Response
     */
    public function show(Hiba $hiba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hiba  $hiba
     * @return \Illuminate\Http\Response
     */
    public function edit(Hiba $hiba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hiba  $hiba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hiba $hiba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hiba  $hiba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hiba $hiba)
    {
        //
    }
}
