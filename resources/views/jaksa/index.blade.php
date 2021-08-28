@extends('layout.template')

@section('title')
SIPPIDUM - Jaksa
@endsection

@section('link')
<link rel="stylesheet" href="{{ asset('vendors/simple-datatables/style.css') }}" />
@endsection

@section('main')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Kelola Jaksa</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Jaksa</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            Tabel Jaksa
        </div>
        <div class="card-body">

            <table class="table table-striped text-center" id="jaksa-table">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">NIP</th>
                        <th class="text-center">Jabatan</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jaksa as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->nip }}</td>
                            <td>{{ $row->jabatan }}</td>
                            <td class="text-center">
                                <a href="jaksa/{{ $row->id_jaksa }}"><span class="badge bg-success">Edit</span>
                                </a>
                                    <form action="jaksa/{{ $row->id_jaksa }}" method="post" style="display: inline-block;">
                                        @method('delete')
                                        @csrf
                                        <button class="badge bg-danger border-0">Hapus</button>
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="btn btn-info" data-bs-toggle="modal"
            data-bs-target="#exampleModalCenter">Tambah Data</button>
        </div>
    </div>
    
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Vertically Centered
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form class="form form-horizontal" method="post">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                @csrf
                                <div class="col-md-4">
                                    <label>Nama</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" name="nama" autocomplete="off"
                                                placeholder="Nama" id="first-name-icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>NIP</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" name="nip" autocomplete="off"
                                                placeholder="NIP" id="first-name-icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Jabatan</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" name="jabatan" autocomplete="off"
                                                placeholder="Jabatan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection


@section('script')
<script src="{{ asset('vendors/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('js/script/jaksa.js') }}"></script>

<script>
    let jaksaTable = document.querySelector('#jaksa-table');
    let dataTable = new simpleDatatables.DataTable(jaksaTable);
</script>

@endsection
