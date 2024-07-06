@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Categori
                </div>
                <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input required type="text" class="form-control" id="floatingInput" name="category_name"
                                    placeholder="Nama Categori">
                                <label for="floatingInput">Nama Kategori</label>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Tambah Data</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>

            <div class="card mt-4">
                <div class="card-header">Data Kategori</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-strip" id="myTable">
                            <thead>
                                <th>Nama</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->category_name }}</td>
                                    <td>
                                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda akan menghapus {{$category->category_name}} ?');">Hapus</button>
                                            <a href="{{ route('category.edit', $category) }}" class="btn btn-warning">Edit</a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection