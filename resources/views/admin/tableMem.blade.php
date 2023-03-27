@extends('admin.main')

@section('konten')
    <div class="mb-3">
        <h3>Table Member</h3>
        <div class="d-flex justify-content-between">
            <p>Tentang Member atau Pelanggan yang Dimiliki perusahaan</p>
            <a href="member/create" type="button" class="btn btn-primary">Tambah</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No.Telp</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <div>
                                <button type="button" class="btn btn-outline-success">Edit</button>
                                <button type="submit" class="btn btn-outline-danger">hapus</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
