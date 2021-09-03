<div class="modal fade" id="modalPenyidik" tabindex="-1" role="dialog" aria-labelledby="modalPenyidikTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-xl"
        role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPenyidikTitle">Penyidik</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-borderless table-hover" id="penyidik-table">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Instansi</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penyidik as $row)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->instansi }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>
                                    <button class="badge bg-info border-0 btn-edit">Pilih</but>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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