@extends('layout.template')

@section('title')
SIPPIDUM - Edit Perkara
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
            <form action="{{ url("/perkara/. $perkara->id_perkara " ) }}" class="form form-horizontal" method="POST" />
            <div class="form-body">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <div class="form-body">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Nomor Perkara</label>
                                </div>
                                <div class="col-md-9 form-group">
                                    <input type="text" class="form-control" name="nomor" placeholder="Nomor Perkara"
                                        value="{{ $perkara->nomor }}">
                                </div>
                                <div class="col-md-3">
                                    <label>Pasal yang dilanggar</label>
                                </div>
                                <div class="col-md-9 form-group">
                                    <input type="text" class="form-control" name="pasal" placeholder="Pasal"
                                        value="{{ $perkara->pasal }}">
                                </div>
                                <div class="col-md-3">
                                    <label>Klasifikasi Perkara</label>
                                </div>
                                <div class="col-md-9 form-group">
                                    <input type="text" class="form-control" name="klasifikasi" placeholder="Klasifikasi"
                                        value="{{ $perkara->klasifikasi }}">
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
                                                    @foreach ($perkara->terdakwa as $terdakwa)
                                                    <tr>
                                                        <td class="text-center" style="width: 10%">
                                                            {{ $loop->iteration }}</td>
                                                        <td style="width: 50%">{{ $terdakwa->nama }}</td>
                                                        <td class="text-center" style="width: 40%">[ <a
                                                                href="#">penahanan</a> ]</td>
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
                                            <livewire:perkara.edit.table.jaksa :jaksa="$perkara->jaksa" />
                                            <livewire:perkara.edit.modal.jaksa :jaksa="$jaksa">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3">
                                            <p>Penyidik</p>
                                        </div>
                                        <div class="col">
                                            <livewire:perkara.edit.table.penyidik :penyidik="$perkara->penyidik" />
                                            <livewire:perkara.edit.modal.penyidik :penyidik='$penyidik' />
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
                                            <input type="checkbox" id="disamarkan" class='form-check-input'
                                                name="disamarkan" value="1" checked>
                                            <label for="disamarkan">Disamarkan</label>
                                            @else
                                            <input type="checkbox" id="disamarkan" class='form-check-input'
                                                name="disamarkan" value="1">
                                            <label for="disamarkan">Disamarkan</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Edit</button>
                        </div>

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