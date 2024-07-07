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
                            <td>
                                <img class="img-thumbnail" src="{{ asset('/storage/images/item/'.$item->image) }}" width="400px" />
                            </td>
                        </tr>
                        <tr>
                            <th>Nama Ruangan</th>
                            <td>{{ $item->room->room_name }}</td>
                        </tr>
                        <tr>
                            <th>Kategori/Jenis Barang</th>
                            <td>{{ $item->category->category_name }}</td>
                        </tr>
                        <tr>
                            <th>Nomor Barang</th>
                            <td>{{ $item->item_number }}</td>
                        </tr>
                        <tr>
                            <th>Stok Barang</th>
                            <td>{{ $item->stock }}</td>
                        </tr>
                        <tr>
                            <th>Kondisi</th>
                            <td>
                                @if($item->condition == 'baik')
                                <span class="badge text-bg-primary">Baik</span>
                                @elseif($item->condition == 'rusak')
                                <span class="badge text-bg-warning">Rusak</span>
                                @elseif($item->condition == 'tidak layak')
                                <span class="badge text-bg-danger">Tidak Layak</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Spesifikasi</th>
                            <td>{!!$item->spec!!}</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection