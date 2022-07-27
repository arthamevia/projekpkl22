<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rumah;

class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $rumah1 = rumah::all();
        return view('rumah.index', compact('rumah1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('rumah.create');
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
            'judul' => 'required|unique:rumahs',
            'artikel' => 'required',
            'tanggal' => 'required',
        ]);

        $rumah1 = new rumah();
        $rumah1->judul = $request->judul;
        $rumah1->artikel = $request->artikel;
        $rumah1->tanggal = $request->tanggal;
        $rumah1->save();
        return redirect()->route('rumah.index')
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
        $rumah1 = rumah::findOrFail($id);
        return view('rumah.show', compact('rumah1'));
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
        $rumah1 = rumah::findOrFail($id);
        return view('rumah.edit', compact('rumah1'));
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
            'judul' => 'required|:rumahs',
            'artikel' => 'required',
            'tanggal' => 'required',
        ]);

        $rumah1 = rumah::findOrFail($id);
        $rumah1->judul = $request->judul;
        $rumah1->artikel = $request->artikel;
        $rumah1->tanggal = $request->tanggal;
        $rumah1->save();
        return redirect()->route('rumah.index')
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
        $rumah1 = rumah::findOrFail($id);
        $rumah1->delete();
        return redirect()->route('rumah.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
