@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah data PIC Ruangan
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
                                <button type="submit" class="btn btn-success">Tambah Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">Data User</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-strip" id="myTable">
                            <thead>
                                <th>Nama</th>
                                <th>Nama Pengguna</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>test1</td>
                                    <td>test2</td>
                                    <td>
                                        <form>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                            <a href="#" class="btn btn-warning">Edit</a>
                                            <a href="#" class="btn btn-success">Detail</a>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection