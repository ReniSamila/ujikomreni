<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\belicash;
use App\motor;
use Session;
use Auth;

class belicashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $belicash = belicash::orderBy('created_at', 'desc')->get();
        return view('backend.belicash.index', compact('belicash'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $belicash = belicash::all();
        $motor = Motor::all();
        return view('backend.belicash.create',compact('belicash','motor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $belicash = new belicash();
        $belicash->kode = $request->kode;
        $belicash->no_ktp = $request->no_ktp;
        $belicash->id_motor = $request->motor_kode;
        $belicash->tanggal_cash = $request->tanggal_cash;
        $belicash->bayar_cash = $request->bayar_cash;
        $belicash->save();
    
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
        $belicash = belicash::findOrFail($id);
        return view('backend.belicash.show', compact('belicash'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $belicash = belicash::findOrFail($id);
        return view('backend.belicash.edit',compact('belicash'));
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
        $belicash = belicash::findOrFail($id);
        $belicash->kode = $request->kode;
        $belicash->no_ktp = $request->no_ktp;
        $belicash->kode_motor = $request->kode_motor;
        $belicash->tanggal_cash = $request->tanggal_cash;
        $belicash->bayar_cash = $request->bayar_cash;
        $belicash->save();
        $response = [
            'success' => true,
            'data' => $belicash,
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
        $belicash = belicash::findOrFail($id)->delete();
        return redirect()->route('belicash.index');
    }
}
