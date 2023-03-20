@extends('admin.main')

@section('konten')
    <div class="mb-3">
        <h3>Tambah Data Outlet</h3>
    </div>
    <div class="card">
        <div class="card-body">
             {{-- alert  --}}
            @if ($errors->any())
                <div class="py-3">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            {{-- end alert --}}
            {{-- Form tambah --}}
            <form action="{{ url('outlet') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="id" class="mb-2">ID Outlet</label>
                    <input type="number" name="id_outlet" id="id" class="form-control" placeholder="Isi ID Outlet">
                </div>
                <div class="mb-3">
                    <label for="nm" class="mb-2">Nama Outlet</label>
                    <input type="text" name="nm_outlet" id="nm" class="form-control"
                        placeholder="Isi Nama Outlet">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="mb-2">Alamat</label>
                    <input type="text" name="alamat_outlet" id="alamat" class="form-control"
                        placeholder="Isi Alamat Outlet">
                </div>
                <div class="mb-3">
                    <label for="no" class="mb-2">No.Telp</label>
                    <input type="number" name="no_outlet" id="no" class="form-control"
                        placeholder="Isi Nomor Telepon Outlet">
                </div>
                <div class="">
                    <button class="btn btn-success" type="submit">Tambah</button>
                    <a href="outlet" class="btn btn-secondary mx-2" type="button">Kembali</a>
                    <button class="btn btn-danger" type="reset">Ulang</button>
                </div>
            </form>
            {{-- end form --}}
        </div>
    </div>
@endsection
