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
            <form action="{{ url('paket') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="id" class="mb-2">ID paket</label>
                    <input type="number" name="id_paket" id="id" class="form-control" placeholder="Isi ID Paket">
                </div>
                <div class="mb-3">
                    <label for="nm" class="mb-2">Nama paket</label>
                    <input type="text" name="nm_paket" id="nm" class="form-control" placeholder="Isi Nama Paket">
                </div>
                <div class="mb-3">
                    <label for="no" class="mb-2">Nama Outlet</label>
                    <select name="id_outlet" id="" class="form-control">
                        @foreach ($outlet as $item)
                        <option value="{{ $item->id_outlet }}">{{ $item->nm_outlet }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="mb-2">Jenis Paket</label>
                    <select name="jenis" id="jenis" class="form-control">
                        <option value="satuan">Satuan</option>
                        <option value="kiloan">kiloan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="no" class="mb-2">Harga</label>
                    <input type="number" name="harga" id="no" class="form-control" placeholder="Isi Harga paket">
                </div>
                <div class="">
                    <button class="btn btn-success" type="submit">Tambah</button>
                    <a href="/paket" class="btn btn-secondary mx-2" type="button">Kembali</a>
                    <button class="btn btn-danger" type="reset">Ulang</button>
                </div>
            </form>
            {{-- end form --}}
        </div>
    </div>
@endsection
