@extends('admin.main')

@section('konten')
    <div class="mb-3">
        <h3>Table Pegawai</h3>
        <div class="d-flex justify-content-between">
            <p>Tentang Pegawai yang perusahaan punya!</p>
            <a href="pegawai/create" type="button" class="btn btn-primary">Tambah</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Pegawai</th>
                        <th scope="col">ID Outlet</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis kelamin</th>
                        <th scope="col">No.telp</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem(); ?>
                    @foreach ($data  as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->id_pegawai }}</td>
                        <td>{{ $item->id_outlet }}</td>
                        <td>{{ $item->nm_pegawai }}</td>
                        <td>{{ $item->jk }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>
                            <div>
                                <a href="{{ url('pegawai/' . $item->id_pegawai . '/edit') }}" type="button"
                                    class="btn btn-outline-success">Edit</a>
                                <form class="d-inline" action="{{ url('pegawai/' . $item->id_pegawai) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>
@endsection
