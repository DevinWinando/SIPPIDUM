@extends('layout.template')

@section('title')
SIPPIDUM - Tambah Perkara
@endsection

@push('link')
    @livewireStyles
    @endpush

    @section('main')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Vertical Form</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" action="{{ url('perkara') }}" method="POST">
                    <div class="form-body">
                        <div class="row justify-content-center">
                            <div class="col-11">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="nomor-perkara">Nomor Perkara</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="nomor-perkara" class="form-control" name="nomor"
                                            placeholder="Nomor Perkara">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="pasal-perkara">Pasal yang Dilanggar</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="pasal-perkara" class="form-control" name="pasal"
                                            placeholder="pasal">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="klasifikasi-perkara">Klasifikasi Perkara</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="klasifikasi-perkara" class="form-control"
                                            name="klasifikasi" placeholder="Klasifikasi">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Terdakwa</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <table class="table table-bordered table-hover">
                                            <thead class="table-secondary">
                                                <tr class="text-center">
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody-terdakwa">
                                                <tr id="row-terdakwa">
                                                    <td class="text-center" style="width: 10%">1</td>
                                                    <td style="width: 50%"></td>
                                                    <td style="width: 40%" class="text-center">
                                                        <button type="button" class="badge bg-success border-0" data-bs-toggle="modal" data-bs-target="#modalTerdakwa">Edit</button>
                                                        <button type="button" class="badge bg-danger border-0 delete-btn">Hapus</button>
                                                    </td>

                                                    <div>
                                                        <div class="modal fade" id="modalTerdakwa" tabindex="-1" role="dialog" aria-labelledby="modalTerdakwaTitle"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-xl"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="modalTerdakwaTitle">Terdakwa</h5>
                                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                            <i data-feather="x"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                       
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                                            <span class="d-none d-sm-block">Close</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        @push('script')
                                        <script src="{{ asset('js/script/perkara/create.js') }}"></script>
                                        @endpush
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="badge bg-info border-0" id="add-terdakwa">Tambah</button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Jaksa</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <livewire:perkara.create.table.jaksa />
                                        <livewire:perkara.create.modal.jaksa :jaksa='$jaksa' />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Penyidik</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <livewire:perkara.create.table.penyidik />
                                        <livewire:perkara.create.modal.penyidik :penyidik='$penyidik' />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Status</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <div class="form-group">
                                            <input type='hidden' value='0' name='disamarkan'>
                                            <input type='checkbox' value='1' name='disamarkan' id="disamarkan">
                                            <label for="disamarkan">Disamarkan</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">

                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection


    @push('script')
        @livewireScripts
    @endpush
