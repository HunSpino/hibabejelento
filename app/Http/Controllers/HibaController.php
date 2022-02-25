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
        return view('hibas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adatok = $request->only(['felhasznalo','hiba','terem_id']);
        $hiba = new Hiba();
        $hiba->fill($adatok);
        $hiba->save();
        return redirect()->route('hibas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hiba  $hiba
     * @return \Illuminate\Http\Response
     */
    public function show(Hiba $hiba)
    {
        return view('hibas.show',['hiba' => $hiba]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hiba  $hiba
     * @return \Illuminate\Http\Response
     */
    public function edit(Hiba $hiba)
    {
        return view('hibas.edit',['hiba' => $hiba]);
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
        $adatok = $request->only(['felhasznalo','hiba','terem_id']);
        $hiba->fill($adatok);
        $hiba->save();
        return redirect()->route('hibas.show',$hiba->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hiba  $hiba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hiba $hiba)
    {
        $hiba->delete();
        return redirect()->route('hibas.index');
    }
}
