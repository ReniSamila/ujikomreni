<?php

namespace App\Http\Controllers;
use App\bayarcicilan;
use Session;
use Auth;

use Illuminate\Http\Request;

class bayarcicilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bayarcicilan = bayarcicilan::orderBy('created_at', 'desc')->get();
        return view('backend.bayarcicilan.index', compact('bayarcicilan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bayarcicilan = bayarcicilan::all();
        return view('backend.bayarcicilan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bayarcicilan = new bayarcicilan();
        $bayarcicilan->kode = $request->kode;
        $bayarcicilan->kode_kridit = $request->kode_kridit;
        $bayarcicilan->tanggal_cicilan = $request->tanggal_cicilan;
        $bayarcicilan->jumlah_cicilan = $request->jumlah_cicilan;
        $bayarcicilan->cicilan_ke = $request->cicilan_ke;
        $bayarcicilan->cicilan_sisa_ke = $request->cicilan_sisa_ke;
        $bayarcicilan->cicilan_sisa_harga = $request->cicilan_sisa_harga;
        $bayarcicilan->save();
    
        return redirect()->route('belicash.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bayarcicilan = bayarcicilan::findOrFail($id);
        return view('backend.bayarcicilan.show', compact('bayarcicilan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bayarcicilan = bayarcicilan::findOrFail($id);
        return view('backend.bayarcicilan.edit',compact('bayarcicilan'));
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
        $bayarcicilan = bayarcicilan::findOrFail($id);
        $bayarcicilan->kode = $request->kode;
        $bayarcicilan->kode_kridit = $request->kode_kridit;
        $bayarcicilan->tanggal_cicilan = $request->tanggal_cicilan;
        $bayarcicilan->jumlah_cicilan = $request->jumlah_cicilan;
        $bayarcicilan->cicilan_ke = $request->cicilan_ke;
        $bayarcicilan->cicilan_sisa_ke = $request->cicilan_sisa_ke;
        $bayarcicilan->cicilan_sisa_harga = $request->cicilan_sisa_harga;
        $bayarcicilan->save();
        $response = [
            'success' => true,
            'data' => $bayarcicilan,
            'message' => 'Berhasil disimpan'
        ];
        return redirect()->route('belicash.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bayarcicilan = bayarcicilan::findOrFail($id)->delete();
        return redirect()->route('bayarcicilan.index');
    }
}
