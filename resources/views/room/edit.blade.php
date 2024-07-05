@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data Ruangan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInput" name="nomor_ruangan"
                                    placeholder="Nomor Ruangan">
                                <label for="floatingInput">Nomor Ruangan</label>
                            </div>
                        </div>
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
                                    <option value="">pic2</option>
                                    <option value="">pic3</option>
                                </select>
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