@extends('admin.main')

@section('konten')
    <div class="mb-3">
        <h3>Table Member</h3>
        <div class="d-flex justify-content-between">
            <p>Tentang Member yang sudah Berlangganan!</p>
            <a href="member/create" type="button" class="btn btn-primary">Tambah</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Member</th>
                        <th scope="col">Nama Member</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">JK</th>
                        <th scope="col">No.telp</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem(); ?>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->id_member }}</td>
                            <td>{{ $item->nm_member }}</td>
                            <td>{{ $item->alamat_member}}</td>
                            <td>{{ $item->jk }}</td>
                            <td>{{ $item->no_member }}</td>
                            <td>
                                <div>
                                    <a href="{{ url('member/' . $item->id_member . '/edit') }}" type="button"
                                        class="btn btn-outline-success">Edit</a>
                                    <form class="d-inline" action="{{ url('member/' . $item->id_member) }}" method="POST">
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
