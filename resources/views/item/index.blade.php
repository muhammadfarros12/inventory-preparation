@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Barang
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Kategori Barang</span>
                                <select class="form-select" name="id_kategori">
                                    <option selected>Choose...</option>
                                    <option value="">elektronik</option>
                                    <option value="">ATK</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Ruangan</span>
                                <select class="form-select" name="id_ruangan">
                                    <option selected>Choose...</option>
                                    <option value="">A1</option>
                                    <option value="">A2</option>
                                    <option value="">A3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInput" name="nama_barang"
                                    placeholder="Nama Barang">
                                <label for="floatingInput">Nama Barang</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Stok/Satuan</span>
                                <select class="form-select" name="id_ruangan">
                                    <option selected>Choose...</option>
                                    <option value="unit">Unit</option>
                                    <option value="kilogram">Kilogram</option>
                                    <option value="butir">Butir</option>
                                    <option value="liter">Liter</option>
                                    <option value="lembar">Lembar</option>
                                    <option value="roll">Roll</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Upload</span>
                                <input type="file" name="gambar" class="form-control" id="inputGroupFile01">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Kondisi</span>
                                <select class="form-select" name="kondisi">
                                    <option selected>Choose...</option>
                                    <option value="baik">Baik</option>
                                    <option value="rusak">Rusak</option>
                                    <option value="tidak layak">Tidak Layak</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="form-group">
                                <textarea class="form-control ckeditor" name="spec" id="ckeditor"></textarea>
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
                <div class="card-header">Data Barang</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-strip" id="myTable">
                            <thead>
                                <th>Gambar</th>
                                <th>Nomor Gambar</th>
                                <th>Nama Barang</th>
                                <th>Tempat</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gambar</td>
                                    <td>1234</td>
                                    <td>kabel</td>
                                    <td>A5</td>
                                    <td>
                                        <form>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                            <a href="/item/edit" class="btn btn-warning">Edit</a>
                                            <a href="/item/detail" class="btn btn-success">Detail</a>
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