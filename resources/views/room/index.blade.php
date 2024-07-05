@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Ruangan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInput" name="nama_ruangan"
                                    placeholder="Nama Ruangan">
                                <label for="floatingInput">Nama Ruangan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Ukuran Ruangan</span>
                                <select class="form-select" name="ukuran">
                                    <option selected>Choose...</option>
                                    <option value="small">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="large">Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Penanggung Jawab</span>
                                <select class="form-select" name="ukuran">
                                    <option selected>Choose...</option>
                                    <option value="">pic1</option>
                                    <option value="">pic1</option>
                                    <option value="">pic1</option>
                                </select>
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
                <div class="card-header">Data Ruangan</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-strip" id="myTable">
                            <thead>
                                <th>Nomor Ruangan</th>
                                <th>Nama Ruangan</th>
                                <th>Ukuran</th>
                                <th>Penanggung Jawab</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10000</td>
                                    <td>A1</td>
                                    <td>large</td>
                                    <td>pic1</td>
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