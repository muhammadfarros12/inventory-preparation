@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Detail Barang
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Detail Gambar</th>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <th>Nama Ruangan</th>
                            <td>A1</td>
                        </tr>
                        <tr>
                            <th>Kategori/Jenis Barang</th>
                            <td>elektronik</td>
                        </tr>
                        <tr>
                            <th>Nomor Barang</th>
                            <td>3456</td>
                        </tr>
                        <tr>
                            <th>Stok Barang</th>
                            <td>3456</td>
                        </tr>
                        <tr>
                            <th>Kondisi</th>
                            <td>
                                <span class="badge text-bg-primary">Baik</span>
                                <span class="badge text-bg-warning">Rusak</span>
                                <span class="badge text-bg-danger">Tidak Layak</span>
                            </td>
                        </tr>
                        <tr>
                            <th>Spesifikasi</th>
                            <td>Masih sangat bagus</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection