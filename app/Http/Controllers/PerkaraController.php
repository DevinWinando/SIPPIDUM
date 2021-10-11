<?php

namespace App\Http\Controllers;

use App\Models\Perkara;
use App\Models\Jaksa;
use App\Models\Penyidik;
use App\Models\Terdakwa;

use Illuminate\Support\facades\DB;
use Exception;
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
        $request->validate([
            'nomor' => 'required',
            'klasifikasi' => 'required',
            'pasal' => 'required',
            'id_penyidik' => 'required',
            'id_jaksa' => 'required',
            'terdakwa.nama' => 'required',
            'terdakwa.alamat' => 'required',
            'terdakwa.ttl' => 'required',
            'terdakwa.usia' => 'required',
        ],
        [
            'nomor.required' => 'Nomor perkara wajib diisi',
            'klasifikasi.required' => 'Klasifikasi wajib diisi',
            'pasal.required' => 'Pasal wajib diisi',
            'id_penyidik.required' => 'Penyidik wajib diisi',
            'id_jaksa.required' => 'Jaksa wajib diisi',
            'terdakwa.nama.required' => 'Nama terdakwa wajib diisi',
            'terdakwa.alamat.required' => 'Alamat terdakwa wajib diisi',
            'terdakwa.ttl.required' => 'TTL terdakwa wajib diisi',
            'terdakwa.usia.required' => 'Usia terdakwa wajib diisi'
        ]
    );
        
        DB::beginTransaction();
        try {
            $id_perkara = Perkara::insertGetId(['nomor' => $request->nomor,
            'klasifikasi' => $request->klasifikasi,
            'pasal' => $request->pasal,
            'id_penyidik' => $request->id_penyidik,
            'id_jaksa' => $request->id_jaksa,
            'disamarkan' => $request->disamarkan]);

            foreach($request->terdakwa as $terdakwa){
                Terdakwa::insert([
                    'id_perkara' => $id_perkara,
                    'nama' => $terdakwa['nama'],
                    'alamat' => $terdakwa['alamat'],
                    'ttl' => $terdakwa['ttl'],
                    'usia' => $terdakwa['usia'],
                ]);
            }
            
            DB::commit();
            
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
        // $perkara = Perkara::insertGetId(array($request->all(), 'id_perkara' => $id_perkara));
        
        return redirect('/perkara/'. $id_perkara)->with('status', 'perkara berhasil ditambahkan');
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
    public function destroy(Perkara $perkara)
    {
        Terdakwa::where('id_perkara', $perkara->id_perkara)->delete();
        Perkara::destroy($perkara->id_perkara);

        return redirect('/perkara')->with('status', 'Data Berhasil Dihapus');
    }
}