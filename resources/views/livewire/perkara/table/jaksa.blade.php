<div>
    <input type="hidden" name="id_jaksa" value="{{ $id_jaksa }}">
    <table class="table table-striped" id="perkara-table">
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
            <tr class="text-center">
                <td>{{ $iteration }}</td>
                <td>{{ $nama }}</td>
                <td>{{ $nip }}</td>
                <td>{{ $jabatan }}</td>
                <td>
                    <button type="button" class="badge bg-info border-0 btn-edit" data-bs-toggle="modal"
                        data-bs-target="#modalJaksa">Ganti</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
