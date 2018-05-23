@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Peminjam</th>
                                    <th>Nama Lokasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_pinjaman as $item)
                                {{ dd($item->pengguna()->nama) }}
                                {{-- <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->id_pengguna->nama }}</td>
                                    <td>{{ $item->id_kunci->nama_lokasi }}</td>
                                </tr> --}}
                                @endforeach
                            </tbody>
                        </table>              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection