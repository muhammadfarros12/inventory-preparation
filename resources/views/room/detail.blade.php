@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Detail Ruangan
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Nomor Ruangan</th>
                            <td>:</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <th>Nama Ruangan</th>
                            <td>:</td>
                            <td>A1</td>
                        </tr>
                        <tr>
                            <th>Penanggung Jawab</th>
                            <td>:</td>
                            <td>PIC1</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">Barang yang tersedia</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-strip" id="myTable">
                            <thead>
                                <th>Nomor Barang</th>
                                <th>Nama Barang</th>
                                <th>Detail</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10000</td>
                                    <td>A1</td>
                                    <td>
                                        <form>
                                            <a href="#" class="btn btn-primary">Detail</a>
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