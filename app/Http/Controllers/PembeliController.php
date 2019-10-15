<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pembeli;
use Session;
use Auth;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = pembeli::orderBy('created_at', 'desc')->get();
        return view('backend.Pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembeli = Pembeli::all();
        return view('backend.Pembeli.create', compact('pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembeli = new pembeli();
        $pembeli->no_ktp_pembeli = $request->no_ktp_pembeli;
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->alamat_pembeli = $request->alamat_pembeli;
        $pembeli->telpon_pembeli = $request->telpon_pembeli;
        $pembeli->pembeli_hp = $request->pembeli_hp;
        $pembeli->save();
    
        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembeli = pembeli::findOrFail($id);
        return view('backend.Pembeli.show', compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = pembeli::findOrFail($id);
        return view('backend.Pembeli.edit',compact('pembeli'));
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
        $pembeli = pembeli::findOrFail($id);
        $pembeli->no_ktp_pembeli = $request->no_ktp_pembeli;
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->alamat_pembeli = $request->alamat_pembeli;
        $pembeli->telpon_pembeli = $request->telpon_pembeli;
        $pembeli->pembeli_hp = $request->pembeli_hp;
        $pembeli->save();
        $response = [
            'success' => true,
            'data' => $pembeli,
            'message' => 'Berhasil disimpan'
        ];
        return redirect()->route('pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = pembeli::findOrFail($id)->DELETE();
        return redirect()->route('pembeli.index');
    }
}
