<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\zakat;


class ZakatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $zakat1 = zakat::all();
        return view('zakat.index', compact('zakat1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('zakat.create');
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
        $validated = $request->validate([
            'judul' => 'required|unique:zakats',
            'artikel' => 'required',
            'tanggal' => 'required',
        ]);

        $zakat1 = new zakat();
        $zakat1->judul = $request->judul;
        $zakat1->artikel = $request->artikel;
        $zakat1->tanggal = $request->tanggal;
        $zakat1->save();
        return redirect()->route('zakat.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $zakat1 = zakat::findOrFail($id);
        return view('zakat.show', compact('zakat1'));
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
        $zakat1 = zakat::findOrFail($id);
        return view('zakat.edit', compact('zakat1'));
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
        //
        $validated = $request->validate([
            'judul' => 'required|:zakats',
            'artikel' => 'required',
            'tanggal' => 'required',
        ]);

        $zakat1 = zakat::findOrFail($id);
        $zakat1->judul = $request->judul;
        $zakat1->artikel = $request->artikel;
        $zakat1->tanggal = $request->tanggal;
        $zakat1->save();
        return redirect()->route('zakat.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $zakat1 = zakat::findOrFail($id);
        $zakat1->delete();
        return redirect()->route('zakat.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
