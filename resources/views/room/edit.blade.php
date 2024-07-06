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
                    <form action="{{ route('room.update', $room->id) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-2">
                                <input value="{{ $room->room_number }}" type="text" class="form-control" id="floatingInput" name="room_number"
                                    placeholder="Nomor Ruangan">
                                <label for="floatingInput">Nomor Ruangan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-2">
                                <input value="{{ $room->room_name }}" type="text" class="form-control" id="floatingInput" name="room_name"
                                    placeholder="Nama Ruangan">
                                <label for="floatingInput">Nama Ruangan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Ukuran Ruangan</span>
                                <select class="form-select" name="size">
                                    <option selected>{{ $room->size }}</option>
                                    <option value="small">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="large">Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Penanggung Jawab</span>
                                <select class="form-select" name="user_id">
                                    <option selected value="{{ $room->user->id }}">{{ $room->user->name }}</option>
                                    @foreach($user as $key)
                                    @if ($key->level == 'pic')
                                    <option value="{{ $key->id }}">{{ $key->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Ubah Data</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection