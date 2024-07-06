@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data Categori
                </div>
                <form action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input required value="{{ $category->category_name }}" type="text" class="form-control" id="floatingInput" name="category_name"
                                    placeholder="Nama Categori">
                                <label for="floatingInput">Nama Kategori</label>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Ubah Data</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection