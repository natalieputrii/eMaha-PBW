<div>
    <table class="table table-bordered mt-2">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Judul</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($task as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->judul_task }}</td>
                <td>{{ $data->deskripsi_task }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
