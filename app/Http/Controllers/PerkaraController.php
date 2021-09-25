<?php

namespace App\Http\Controllers;

use App\Models\Perkara;
use App\Models\Jaksa;
use App\Models\Penyidik;
use App\Models\Terdakwa;
use Illuminate\Http\Request;

class PerkaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perkara = Perkara::get();

        return view('perkara.index', compact('perkara'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jaksa = Jaksa::all();
        $penyidik = Penyidik::all();

        return view('perkara.create', compact('jaksa', 'penyidik'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'nomor' => 'required',
            'klasifikasi' => 'required',
            'pasal' => 'required',
            'id_penyidik' => 'required',
            'id_jaksa' => 'required',
            'disamarkan' => 'required'
        ]);

        $id = Perkara::insertGetId( ['nomor' => $request->nomor,
        'klasifikasi' => $request->klasifikasi,
        'pasal' => $request->pasal,
        'id_penyidik' => $request->id_penyidik,
        'id_jaksa' => $request->id_jaksa,
        'disamarkan' => $request->disamarkan] );

        // $perkara = Perkara::insertGetId(array($request->all(), 'id_perkara' => $id_perkara));
        
        // return redirect('/perkara')->with('status', 'perkara berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Perkara $perkara)
    {
        
        
        return view('perkara.show', compact('perkara'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Perkara $perkara)
    {
        $jaksa = Jaksa::all();
        $penyidik = Penyidik::all();

        return view('perkara.edit', compact('perkara', 'jaksa', 'penyidik'));
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
        dd($request);
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
    }
}