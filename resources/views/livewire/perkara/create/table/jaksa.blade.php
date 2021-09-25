<div>
    <input type="hidden" name="id_jaksa" value="{{ $id_jaksa }}">
    <table class="table table-bordered table-hover" id="perkara-table">
        <thead class="table-secondary">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">NIP</th>
                <th class="text-center">Jabatan</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td>{{ $iteration }}</td>
                <td>{{ $nama }}</td>
                <td>{{ $nip }}</td>
                <td>{{ $jabatan }}</td>
            </tr>
        </tbody>
    </table>
</div>
