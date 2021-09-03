@extends('layout.template')

@section('title')
SIPPIDUM - Tambah Perkara
@endsection

@section('main')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Vertical Form</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form class="form form-vertical" action="{{ url('perkara') }}" method="POST">
                <div class="form-body">
                    <div class="row">
                        @csrf
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nomor-perkara-vertical">Nomor Perkara</label>
                                <input type="text" id="nomor-perkara-vertical" class="form-control" name="nomor"
                                    placeholder="Nomor Perkara">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="pasal-id-vertical">Pasal</label>
                                <input type="text" id="pasal-id-vertical" class="form-control" name="pasal"
                                    placeholder="Pasal">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="klasifikasi-vertical">Klasifikasi</label>
                                <input type="text" id="klasifikasi-vertical" class="form-control" name="klasifikasi"
                                    placeholder="Klasifikasi">
                            </div>
                        </div>

                        <div class="col-12">
                            <livewire:perkara.table.table-jaksa></livewire:perkara>
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#modalJaksa">Jaksa</button>
                        </div>

                        <div class="col-12">
                            <livewire:perkara.table.table-penyidik></livewire:perkara.table.table-penyidik>
                                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target="#modalPenyidik">Penyidik</button>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="terdakwa-vertical">Terdakwa</label>
                                <div class="d-flex">
                                    <input type="text" id="terdakwa-vertical" class="form-control" name="terdakwa"
                                        placeholder="Terdakwa">
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#modalTerdakwa">Terdakwa</button>
                                </div>
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

<livewire:perkara.modal.modal-jaksa :jaksa="$jaksa"></livewire:perkara>
<livewire:perkara.modal.modal-penyidik :penyidik="$penyidik"></livewire:perkara>
@include('perkara.modal.terdakwa')
@livewireScripts

    @endsection
