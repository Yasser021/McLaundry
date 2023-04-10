@extends('admin.main')

@section('konten')
    <div class="mb-3">
        <h3>Table Paket</h3>
        <div class="d-flex justify-content-between">
            <p>Tentang Paket yang perusahaan punya!</p>
            <a href="paket/create" type="button" class="btn btn-primary">Tambah</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Paket</th>
                        <th scope="col">ID Outlet</th>
                        <th scope="col">Nama Outlet</th>
                        <th scope="col">Nama Paket</th>
                        <th scope="col">Jenis Paket</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem(); ?>
                    @foreach ($data  as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->id_paket }}</td>
                        <td>{{ $item->id_outlet }}</td>
                        <td>{{ $item->nm_paket }}</td>
                        <td>{{ $item->jenis }}</td>
                        <td>Rp.{{ $item->harga }}</td>
                        <td>
                            <div>
                                <a href="{{ url('paket/' . $item->id_paket . '/edit') }}" type="button"
                                    class="btn btn-outline-success">Edit</a>
                                <form class="d-inline" action="{{ url('paket/' . $item->id_paket) }}" method="POST">
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
