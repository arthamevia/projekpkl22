<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\infaq;

class InfaqController extends Controller
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
        $infaq1 = infaq::all();
        return view('infaq.index', compact('infaq1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('infaq.create');
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
            'judul' => 'required|unique:infaqs',
            'artikel' => 'required',
            'tanggal' => 'required',
        ]);

        $infaq1 = new infaq();
        $infaq1->judul = $request->judul;
        $infaq1->artikel = $request->artikel;
        $infaq1->tanggal = $request->tanggal;
        $infaq1->save();
        return redirect()->route('infaq.index')
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
        $infaq1 = infaq::findOrFail($id);
        return view('infaq.show', compact('infaq1'));
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
        $infaq1 = infaq::findOrFail($id);
        return view('infaq.edit', compact('infaq1'));
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
            'judul' => 'required|unique:infaqs',
            'artikel' => 'required',
            'tanggal' => 'required',
        ]);

        
        $infaq1 = infaq::findOrFail($id);
        $infaq1->judul = $request->judul;
        $infaq1->artikel = $request->artikel;
        $infaq1->tanggal = $request->tanggal;
        $infaq1->save();
        return redirect()->route('infaq.index')
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
        $infaq1 = infaq::findOrFail($id);
        $infaq1->delete();
        return redirect()->route('infaq.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
