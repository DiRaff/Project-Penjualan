@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col md-10">
            
            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga Jual</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($barang as $a)
                                <tr>
                                    <td>{{ $a->id }}</td>
                                    <td>{{ $a->kode_barang }}</td>
                                    <td>{{ $a->nama_barang }}</td>
                                    <td>{{ $a->harga_jual }}</td>

                                    

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection