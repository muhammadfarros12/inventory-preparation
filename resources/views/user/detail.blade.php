@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Detail PIC Ruangan
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>:</th>
                            <th>{{ $user->name }}</th>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <th>:</th>
                            <th>{{ $user->username }}</th>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th>:</th>
                            <th>{{ $user->email }}</th>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">List ruangan yang di jaga</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-strip" id="myTable">
                            <thead>
                                <th>Nomor Ruangan</th>
                                <th>Nama Ruangan</th>
                            </thead>
                            <tbody>
                                @foreach($room as $value)
                                <tr>
                                    <td>{{ $value->room_number }}</td>
                                    <td>{{ $value->room_name }}</td>
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