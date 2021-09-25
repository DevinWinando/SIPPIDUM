<div>
    <input type="hidden" name="id_penyidik" value="{{ $id_penyidik }}">
    <table class="table table-bordered table-hover" id="perkara-table">
        <thead class="table-secondary">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Instansi</th>
                <th class="text-center">Alamat</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td>{{ $iteration }}</td>
                <td>{{ $instansi }}</td>
                <td>{{ $alamat }}</td>
            </tr>
        </tbody>
    </table>
</div>
