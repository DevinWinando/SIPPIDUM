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
                <form class="form form-vertical" action="{{ url('perkara') }}" method="POST">
                    <div class="form-body">
                        <div class="row justify-content-center">
                            @csrf
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nomor-perkara">Nomor Perkara</label>
                                    <input type="text" id="nomor-perkara" class="form-control" name="nomor"
                                        placeholder="Nomor Perkara">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="pasal">Pasal</label>
                                    <input type="text" id="pasal" class="form-control" name="pasal" placeholder="Pasal">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="klasifikasi">Klasifikasi</label>
                                    <input type="text" id="klasifikasi" class="form-control" name="klasifikasi"
                                        placeholder="Klasifikasi">
                                </div>
                            </div>

                            <div class="col-12">
                                <livewire:perkara.table.jaksa>
                                    <livewire:perkara.modal.jaksa :jaksa='$jaksa'>
                            </div>

                            <div class="col-12">
                                <livewire:perkara.table.penyidik>
                                    <livewire:perkara.modal.penyidik :penyidik='$penyidik'>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="terdakwa">Terdakwa</label>
                                    <div class="d-flex">
                                        {{-- <input type="text" id="terdakwa" class="form-control" name="terdakwa"
                                            placeholder="Terdakwa"> --}}
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#modalTerdakwa">Terdakwa</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="disamarkan">Disamarkan</label>
                                    <input type='hidden' value='0' name='disamarkan'>
                                    <input type='checkbox' value='1' name='disamarkan' id="disamarkan">
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
