<?php

namespace App\Http\Controllers;

use App\Models\Terem;
use Illuminate\Http\Request;

class TeremController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terems = Terem::orderBy('id')->get();
        return view('terems.index',['terems' =>$terems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adatok = $request->only(['epulet','emelet','terem','gep']);
        $terem = new Terem();
        $terem->fill($adatok);
        $terem->save();
        return redirect()->route('terems.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Terem  $terem
     * @return \Illuminate\Http\Response
     */
    public function show(Terem $terem)
    {
        return view('terems.show',['terem' => $terem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Terem  $terem
     * @return \Illuminate\Http\Response
     */
    public function edit(Terem $terem)
    {
        return view('terems.edit', ['terem' => $terem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Terem  $terem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terem $terem)
    {
        $adatok = $request->only(['epulet','emelet','terem','gep']);
        $terem->fill($adatok);
        $terem->save();
        return redirect()->route('terems.show', $terem->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Terem  $terem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Terem $terem)
    {
        $terem->delete();
        return redirect()->route('terems.index');
    }
}
