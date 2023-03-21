@extends('admin.main')

@section('konten')
    <div class="mb-3">
        <h3>Table Outlet</h3>
        <div class="d-flex justify-content-between">
            <p>Tentang Outlet yang perusahaan punya!</p>
            <a href="outlet/create" type="button" class="btn btn-primary">Tambah</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No.Telp</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $i = $data->firstItem()?>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->id_outlet }}</td>
                            <td>{{ $item->nm_outlet }}</td>
                            <td>{{ $item->alamat_outlet }}</td>
                            <td>{{ $item->no_outlet }}</td>
                            <td>
                                <div>
                                    <a href="{{ url('outlet/'.$item->id_outlet.'/edit') }}" type="button" class="btn btn-outline-success">Edit</a>
                                    <form class="d-inline" action="{{ url('outlet/'.$item->id_outlet) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                         <button type="submit" class="btn btn-outline-danger">hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>
@endsection
