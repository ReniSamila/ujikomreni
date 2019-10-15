<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kriditpaket;
use Session;
use Auth;

class kriditpaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriditpaket = kriditpaket::orderBy('created_at', 'desc')->get();
        return view('backend.kriditpaket.index', compact('kriditpaket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriditpaket = kriditpaket::all();
        return view('backend.kriditpaket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembeli = new kriditpaket();
        $pembeli->kode = $request->kode;
        $pembeli->harga_cash = $request->harga_cash;
        $pembeli->uang_muka = $request->uang_muka;
        $pembeli->jumlah_cicilan = $request->jumlah_cicilan;
        $pembeli->paket_bunga = $request->paket_bunga;
        $pembeli->nilai_cicilan = $request->nilai_cicilan;
        $pembeli->save();
    
        return redirect()->route('kriditpaket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kriditpaket = kriditpaket::findOrFail($id);
        return view('backend.kriditpaket.show', compact('kriditpaket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kriditpaket = kriditpaket::findOrFail($id);
        return view('backend.kriditpaket.edit', compact('kriditpaket'));
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
        $kriditpaket =  kriditpaket::findOrFail($id);
        $kriditpaket->kode = $request->kode;
        $kriditpaket->harga_cash = $request->harga_cash;
        $kriditpaket->uang_muka = $request->uang_muka;
        $kriditpaket->jumlah_cicilan = $request->jumlah_cicilan;
        $kriditpaket->paket_bunga = $request->paket_bunga;
        $kriditpaket->nilai_cicilan = $request->nilai_cicilan;
        $kriditpaket->save();
        $response = [
            'success' => true,
            'data' => $kriditpaket,
            'message' => 'Berhasil disimpan'
        ];
        return redirect()->route('kriditpaket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kriditpaket = kriditpaket::findOrFail($id)->DELETE();
        return redirect()->route('kriditpaket.index');
    }
}
