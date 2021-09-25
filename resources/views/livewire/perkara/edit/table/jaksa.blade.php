<table class="table table-bordered table-hover">
    <thead class="table-secondary">
        <tr class="text-center">
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <input type="hidden" name="jaksa" value="{{ $jaksa->id_jaksa }}">
            <td class="text-center" style="width: 10%">1</td>
            <td style="width: 40%">{{ $jaksa->nama }}</td>
            <td style="width: 40%">{{ $jaksa->jabatan }}</td>
            <td style="width: 10%">
                <button type="button" class="badge bg-info border-0 btn-edit" data-bs-toggle="modal"
                    data-bs-target="#modalJaksa">Ubah</button>
            </td>
        </tr>
    </tbody>
</table>
