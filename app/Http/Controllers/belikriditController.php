<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\belikridit;
use Session;
use Auth;

class belikriditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $belikridit = belikridit::orderBy('created_at', 'desc')->get();
        return view('backend.belikridit.index', compact('belikridit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $belikridit = belikridit::all();
        return view('backend.belikridit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $belikridit = new belikridit();
        $belikridit->kode = $request->kode;
        $belikridit->no_ktp = $request->no_ktp;
        $belikridit->kode_paket = $request->kode_paket;
        $belikridit->kode_motor = $request->kode_motor;
        $belikridit->tanggal_kridit = $request->tanggal_kridit;
        $belikridit->fotokopi_ktp = $request->fotokopi_ktp;
        $belikridit->fotokopi_kk = $request->fotokopi_kk;
        $belikridit->fotokopi_slip_gaji = $request->fotokopi_slip_gaji;
        $belikridit->save();
    
        return redirect()->route('belikridit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $belikridit = belikridit::findOrFail($id);
        return view('backend.belikridit.show', compact('belikridit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $belikridit = belikridit::findOrFail($id);
        return view('backend.belikridit.edit',compact('belikridit'));
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
        $belikridit = belikridit::findOrFail($id);
        $belikridit->kode = $request->kode;
        $belikridit->no_ktp = $request->no_ktp;
        $belikridit->kode_paket = $request->kode_paket;
        $belikridit->kode_motor = $request->kode_motor;
        $belikridit->tanggal_kridit = $request->tanggal_kridit;
        $belikridit->fotokopi_ktp = $request->fotokopi_ktp;
        $belikridit->fotokopi_kk = $request->fotokopi_kk;
        $belikridit->fotokopi_slip_gaji = $request->fotokopi_slip_gaji;
        $belikridit->save();
        $response = [
            'success' => true,
            'data' => $belikridit,
            'message' => 'Berhasil disimpan'
        ];
        return redirect()->route('belikridit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $belikridit = belikridit::findOrFail($id)->DELETE();
        return redirect()->route('belikridit.index');
    }
}
