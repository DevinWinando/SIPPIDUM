<?php

namespace App\Http\Controllers;

use App\Models\Jaksa;
use Illuminate\Http\Request;

class JaksaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jaksa = Jaksa::all();

        return view('jaksa.index', compact('jaksa'));
        // return view('jaksa.index', compact('jaksa'));
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
            'nama' => 'required',
            'nip' => 'required',
            'jabatan' => 'required'
        ]);

        Jaksa::create($request->all());

        return redirect('/jaksa')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Jaksa $jaksa)
    {
        $result = Jaksa::find($jaksa)->first();

        return json_encode($jaksa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jaksa $jaksa)
    {
        $result = Jaksa::where('id_jaksa', $jaksa)->first();

        echo json_encode($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jaksa $jaksa)
    {
        jaksa::where('id_jaksa', $jaksa->id_jaksa)->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan
        ]);

        return redirect('/jaksa')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jaksa $jaksa)
    {
        Jaksa::destroy($jaksa->id_jaksa);

        return redirect('/jaksa')->with('status', 'Data Berhasil Dihapus');
    }
}