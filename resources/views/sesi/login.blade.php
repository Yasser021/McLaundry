@extends('sesi.main-login')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card cf">
                    <div class="card-body">
                        <h4 class="text-center my-5">Log In</h4>
                        <form action="../sesi/login" method="Post">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text input" id="username" for="email"><img
                                        src="../assets/images/logo/person 1.png" alt="Person"></span>
                                <input type="email" name="email" class="form-control" value="{{ Session::get('email') }}" placeholder="Email" aria-label="email"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text input" id="password" for="password"><img
                                        src="../assets/images/logo/lock 1.png" alt="lock"></span>
                                <input type="password" name="password" class="form-control" placeholder="Password" aria-label="password"
                                    aria-describedby="basic-addon1">
                            </div>
                            <button name="submit" class="btn butlog" type="submit">Login</button>
                        </form>
                        <p class="regis">Belum punya akun? <a href="/sesi/regis">Register</a> </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card cd">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
