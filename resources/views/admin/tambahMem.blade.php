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
            <form action="{{ url('member') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="id" class="mb-2">ID member</label>
                    <input type="number" name="id_member" id="id" class="form-control" placeholder="Isi ID Member">
                </div>
                <div class="mb-3">
                    <label for="nm" class="mb-2">Nama member</label>
                    <input type="text" name="nm_member" id="nm" class="form-control"
                        placeholder="Isi Nama Member">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="mb-2">Alamat</label>
                    <input type="text" name="alamat_member" id="alamat" class="form-control"
                        placeholder="Isi Alamat Member">
                </div>
                <div class="mb-3">
                    <label for="jk">Jenis Kelamin</label>
                    <div class="form-check my-2 ">
                        <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Pria
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Wanita
                        </label>
                      </div>
                </div>

                <div class="mb-3">
                    <label for="no" class="mb-2">No.Telp</label>
                    <input type="number" name="no_member" id="no" class="form-control"
                        placeholder="Isi Nomor Telepon Member">
                </div>
                <div class="">
                    <button class="btn btn-success" type="submit">Tambah</button>
                    <a href="member" class="btn btn-secondary mx-2" type="button">Kembali</a>
                    <button class="btn btn-danger" type="reset">Ulang</button>
                </div>
            </form>
            {{-- end form --}}
        </div>
    </div>
@endsection
