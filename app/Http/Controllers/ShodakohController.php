<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shodakoh;

class ShodakohController extends Controller
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
        $shodakoh1 = shodakoh::all();
        return view('shodakoh.index', compact('shodakoh1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('shodakoh.create');
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
            'judul' => 'required|unique:shodakohs',
            'artikel' => 'required',
            'tanggal' => 'required',
        ]);

        $shodakoh1 = new shodakoh();
        $shodakoh1->judul = $request->judul;
        $shodakoh1->artikel = $request->artikel;
        $shodakoh1->tanggal = $request->tanggal;
        $shodakoh1->save();
        return redirect()->route('shodakoh.index')
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
        $shodakoh1 = shodakoh::findOrFail($id);
        return view('shodakoh.show', compact('shodakoh1'));
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
        $shodakoh1 = shodakoh::findOrFail($id);
        return view('shodakoh.edit', compact('shodakoh1'));
        return view('tampilanuser.sedekah', compact('shodakoh1'));
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
            'judul' => 'required|:shodakohs',
            'artikel' => 'required',
            'tanggal' => 'required',
        ]);

        $shodakoh1 = shodakoh::findOrFail($id);
        $shodakoh1->judul = $request->judul;
        $shodakoh1->artikel = $request->artikel;
        $shodakoh1->tanggal = $request->tanggal;
        $shodakoh1->save();
        return redirect()->route('shodakoh.index')
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
        $shodakoh1 = shodakoh::findOrFail($id);
        $shodakoh1->delete();
        return redirect()->route('shodakoh.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
