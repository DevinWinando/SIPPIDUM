<?php

namespace App\Http\Controllers;

use App\Models\Penyidik;
use Illuminate\Http\Request;

class PenyidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyidik = Penyidik::all();

        return view('penyidik.index', compact('penyidik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'instansi' => 'required',
            'alamat' => 'required'
        ]);

        Penyidik::create($request->all());

        return redirect('/penyidik')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Penyidik $penyidik)
    {
        $result = Penyidik::find($penyidik)->first();

        return json_encode($result);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penyidik $penyidik)
    {
        Penyidik::where('id_penyidik', $penyidik->id_penyidik)->update([
            'instansi' => $request->instansi,
            'alamat' => $request->alamat
        ]);

        return redirect('/penyidik')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penyidik $penyidik)
    {
        Penyidik::destroy($penyidik->id_penyidik);

        return redirect('/penyidik')->with('status', 'data berhasil ditambahkan');
    }
}