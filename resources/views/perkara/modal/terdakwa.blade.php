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
                <table class="table table-borderless table-hover" id="jaksa-table">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Usia</th>
                            <th class="text-center">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($terdakwa as $row)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->usia }}</td>
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