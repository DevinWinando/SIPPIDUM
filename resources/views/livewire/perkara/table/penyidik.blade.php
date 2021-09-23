<div>
    <input type="hidden" name="id_penyidik" value="{{ $id_penyidik }}">
    <table class="table table-striped" id="perkara-table">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Instansi</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td>{{ $iteration }}</td>
                <td>{{ $instansi }}</td>
                <td>{{ $alamat }}</td>
                <td>
                    <button type="button" class="badge bg-info border-0 btn-edit" data-bs-toggle="modal"
                        data-bs-target="#modalPenyidik">Ganti</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
