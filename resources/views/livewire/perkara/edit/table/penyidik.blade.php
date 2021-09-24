<table class="table table-bordered table-hover">
    <thead class="table-secondary">
        <tr class="text-center">
            <th scope="col">No</th>
            <th scope="col">Instansi</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-center" style="width: 10%">1</td>
            <td style="width: 40%">{{ $perkara->penyidik->instansi }}</td>
            <td style="width: 40%">{{ $perkara->penyidik->alamat }}</td>
            <td style="width: 10%">
                <button type="button" class="badge bg-info border-0 btn-edit" data-bs-toggle="modal"
                data-bs-target="#modalPenyidik">Ubah</button>
            </td>
        </tr>
    </tbody>
</table>