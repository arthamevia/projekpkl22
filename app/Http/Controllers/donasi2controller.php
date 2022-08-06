<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donatur;

class donasi2controller extends Controller
{
    //
    public function index(){
        return view('tampilanuser.donasi2',[
            "title" => "Donasi"
        ]);
    }

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
        return redirect()->route('#')
            ->with('success', 'Data berhasil dibuat!');
    }
}
