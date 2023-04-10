@extends('sesi.main-login')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card cf-r">
                    <div class="card-body">
                        <h4 class="text-center my-5">Register</h4>
                        <form action="../sesi/create" method="Post">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text input" id="username" for="email"><img
                                        src="../assets/images/logo/person 1.png" alt="Person"></span>
                                <input type="text" class="form-control " name="name" placeholder="Nama"
                                    aria-label="Nama" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text input" id="username" for="email"><img
                                        src="../assets/images/logo/at.png" alt="Person"></span>
                                <input type="email" class="form-control " name="email" placeholder="Email"
                                    aria-label="email" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text input" id="password" for="password"><img
                                        src="../assets/images/logo/lock 1.png" alt="lock"></span>
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    aria-label="password" aria-describedby="basic-addon1">
                            </div>
                            <button class="btn butlog" type="submit">Register</button>
                        </form>
                        <p class="regis">Sudah punya akun? <a href="/sesi" type="submit">Log In</a> </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card cd-r">
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
