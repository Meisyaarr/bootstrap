@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex px-2 py-2">
                        <div class="mb-3">
                            <a href="{{route('datadiri.create')}}" class="btn btn-outline-primary">Tambah Data</a>
                        </div>
                            <div></div>
                        </div>
                        <div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>JK</th>
                                        <th>Agama</th>
                                        <th>TTL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($datadiris as $datadiri)
                                <tr>
                                    <td>{{$datadiri->nama}}</a></td>
                                    <td>{{$datadiri->alamat}}</td>
                                    <td>{{$datadiri->jk}}</td>
                                    <td>{{$datadiri->agama}}</td>
                                    <td>{{$datadiri->ttl}}</td>
                                    <td>
                                        <a href="{{route('datadiri.tampil-formEdit',$datadiri->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                                        <a href="" class="btn btn-outline-success btn-sm">Show</a>
                                        <a href="" class="btn btn-outline-danger btn-sm">Hapus</a>
                                        
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