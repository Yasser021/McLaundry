@extends('admin.main')

@section('konten')
    <h3>Table Outlet</h3>
    <p>Tentang Outlet yang perusahaan punya!</p>
    <div class="card">
        <div class="card-body">
            <table class="table">
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
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>0809090</td>
                        <td>
                            <div>
                                <button type="button" class="btn btn-outline-success">Edit</button>
                                <button type="button" class="btn btn-outline-danger">hapus</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
