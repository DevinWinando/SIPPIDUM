@extends('layout.template')

@section('title')
SIPPIDUM - Detail Perkara
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Vertical Form</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="form-body">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <p>Nomor Perkara</p>
                                </div>
                                <div class="col">
                                    <p>{{ $perkara->nomor }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <p>Pasal yang dilanggar</p>
                                </div>
                                <div class="col">
                                    <p>{{ $perkara->pasal }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <p>Klasifikasi Perkara</p>
                                </div>
                                <div class="col">
                                    <p>{{ $perkara->klasifikasi }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <p>Terdakwa</p>
                                </div>
                                <div class="col">
                                    <table class="table table-bordered table-hover">
                                        <thead class="table-secondary">
                                            <tr class="text-center">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Penahanan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($perkara->terdakwa as $terdakwa)
                                            <tr>
                                                <td class="text-center" style="width: 10%">
                                                    {{ $loop->iteration }}</td>
                                                <td style="width: 50%">{{ $terdakwa->nama }}</td>
                                                <td class="text-center" style="width: 40%">[ <a href="#">penahanan</a> ]
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <p>Jaksa</p>
                                </div>
                                <div class="col">
                                    <table class="table table-bordered table-hover">
                                        <thead class="table-secondary">
                                            <tr class="text-center">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jabatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="width: 10%">1</td>
                                                <td style="width: 50%">{{ $perkara->jaksa->nama }}</td>
                                                <td style="width: 40%">{{ $perkara->jaksa->jabatan }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <p>Penyidik</p>
                                </div>
                                <div class="col">
                                    <table class="table table-bordered table-hover">
                                        <thead class="table-secondary">
                                            <tr class="text-center">
                                                <th scope="col">No</th>
                                                <th scope="col">Instansi</th>
                                                <th scope="col">Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="width: 10%">1</td>
                                                <td style="width: 50%">{{ $perkara->penyidik->instansi }}</td>
                                                <td style="width: 40%">{{ $perkara->penyidik->alamat }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <p>Status</p>
                                </div>
                                <div class="col">
                                    @if($perkara->disamarkan == 1)
                                    <p>Disamarkan</p>
                                    @else
                                    <p>Tidak Disamarkan</p>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="col-12 d-flex justify-content-center">
                            <a href="{{ url('perkara/'. $perkara->id_perkara. '/edit') }}"
                                class="btn btn-primary me-1 mb-1">Edit</a>
                            <form action="{{ url('perkara/'. $perkara->id_perkara) }}" method="post">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger me-1 mb-1">Hapus</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection