<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donatur;

class DonaturController extends Controller
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
        $donatur1 = donatur::all();
        return view('donatur.index', compact('donatur1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('donatur.create');
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
            'nama' => 'required',
            'email' => 'required',
            'no' => 'required|unique:donaturs',
            'jenis' => 'required',
            'jumlah' => 'required',
            'pembayaran' => 'required',
        ]);

        $donatur1 = new donatur();
        $donatur1->nama = $request->nama;
        $donatur1->email = $request->email;
        $donatur1->no = $request->no;
        $donatur1->jenis = $request->jenis;
        $donatur1->jumlah = $request->jumlah;
        $donatur1->pembayaran = $request->pembayaran;

        $donatur1->save();
        return redirect()->route('donatur.index')
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
        $donatur1 = donatur::findOrFail($id);
        return view('donatur.show', compact('donatur1'));
    
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
        $donatur1 = donatur::findOrFail($id);
        return view('donatur.show', compact('donatur1'));
        
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
            'nama' => 'required|',
            'email' => 'required',
            'no' => 'required|unique:donaturs',
            'jenis' => 'required',
            'jumlah' => 'required',
            'pembayaran' => 'required',

        ]);

        $donatur1 = donatur::findOrFail($id);
        $donatur1->nama = $request->nama;
        $donatur1->email = $request->email;
        $donatur1->no = $request->no;
        $donatur1->jenis = $request->jenis;
        $donatur1->jumlah = $request->jumlah;
        $donatur1->pembayaran = $request->pembayaran;

        $donatur1->save();
        return redirect()->route('donatur.index')
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
        $donatur1 = donatur::findOrFail($id);
        $donatur1->delete();
        return redirect()->route('donatur.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
