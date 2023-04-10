@extends('admin.main')

@section('konten')
    <div class="mb-3">
        <h3>Tambah Data Pegawai</h3>
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
            <form action="{{ url('pegawai') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="id" class="mb-2">ID pegawai</label>
                    <input type="number" name="id_pegawai" id="id" class="form-control" placeholder="Isi ID Pegawai">
                </div>
                <div class="mb-3">
                    <label for="nm" class="mb-2">Nama Pegawai</label>
                    <input type="text" name="nm_pegawai" id="nm" class="form-control" placeholder="Isi Nama Pegawai">
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
                    <label for="jk">Jenis Kelamin</label>
                    <div class="form-check my-2 ">
                        <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" value="Pria">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Pria
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" value="Wanita">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Wanita
                        </label>
                      </div>
                </div>
                <div class="mb-3">
                    <label for="no" class="mb-2">No.Telp</label>
                    <input type="number" name="no_telp" id="no" class="form-control"
                        placeholder="Isi Nomor Telepon Member">
                </div>
                    <button class="btn btn-success" type="submit">Tambah</button>
                    <a href="../pegawai" class="btn btn-secondary mx-2" type="button">Kembali</a>
                    <button class="btn btn-danger" type="reset">Ulang</button>
                </div>
            </form>
            {{-- end form --}}
        </div>
    </div>
@endsection
