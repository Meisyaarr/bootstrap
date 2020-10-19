@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="row">               

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" value="{{$datadiris->nama}}" class="form-control" id="" readonly>
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" value="{{$datadiris->alamat}}"class="form-control" id="" readonly>
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Image</label>
                                        <img src="{{asset('storage/'.$datadiris->image)}}" alt="" widht="30px" height="30px">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Telp</label>
                                    <input type="text" name="telp" value="{{$datadiris->telp}}" class="form-control" id="" readonly>
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">JK</label>
                                    <input type="text" name="jk" value="{{$datadiris->jk}}"class="form-control" id="" readonly>
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Agama</label>
                                    <input type="text" name="agama" value="{{$datadiris->agama}}"class="form-control" id="" readonly>
                                </div>
                            </div>      
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">TTL</label>
                                    <input type="date" name="ttl"value="{{$datadiris->ttl}}"class="form-control" id="" readonly>
                                </div>
                            </div>                 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah"value="{{$datadiris->asal_sekolah}}"class="form-control" id="" readonly>
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Ibu</label>
                                    <input type="text" name="nama_ibu"value="{{$datadiris->nama_ibu}}"class="form-control" id="" readonly>
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Ayah</label>
                                    <input type="text" name="nama_ayah"value="{{$datadiris->nama_ayah}}"class="form-control" id="" readonly>
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