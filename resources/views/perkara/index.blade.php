@extends('layout.template')

@section('title')
    SIPPIDUM - Perkara
@endsection

@push('link')
<link rel="stylesheet" href="{{ asset('vendors/simple-datatables/style.css') }}" />
@endpush

@section('main')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Kelola Penyidik</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Penyidik</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            Tabel Penyidik
        </div>
        <div class="card-body">
            <table class="table table-striped" id="perkara-table">
                <thead>
                    <tr>
                        <th class="text-center">Nomor Perkara</th>
                        <th class="text-center">Terdakwa</th>
                        <th class="text-center">Jaksa</th>
                        <th class="text-center">Penyidik</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($perkara as $row)
                        <tr class="text-center">
                            <td>{{ $row->nomor }}</td>
                            <td>{{ $row->terdakwa->nama }}</td>
                            <td>{{ $row->jaksa->nama }}</td>
                            <td>{{ $row->penyidik->instansi }}</td>
                            <td>
                                <a href="{{ url('perkara/'. $row->id_perkara) }}" class="badge bg-success border-0 btn-edit">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ url('/perkara/create') }}" class="btn btn-info btn-add">Tambah Data</a>
        </div>
    </div>

</section>
@endsection

@push('script')
<script src="{{ asset('vendors/simple-datatables/simple-datatables.js') }}"></script>

<script>
    let perkaraTable = document.querySelector('#perkara-table');
    let dataTable = new simpleDatatables.DataTable(perkaraTable);
</script>

@endpush