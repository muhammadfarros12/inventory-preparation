@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit data PIC Ruangan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInput" name="name"
                                    placeholder="Name">
                                <label for="floatingInput">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInputUsername" name="username"
                                    placeholder="Username">
                                <label for="floatingInputUsername">Nama Pengguna / Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-2">
                                <input type="email" class="form-control" id="floatingInputEmail" name="email"
                                    placeholder="Alamat Email">
                                <label for="floatingInputEmail">Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-2">
                                <input type="password" class="form-control" id="floatingInputPassword" name="password"
                                    placeholder="Password">
                                <label for="floatingInputPassword">Katasandi / Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Ubah Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection