@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="card">
        <div class="card-body">
            <form action="{{route('kirim.sms')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Number</label>
                <input type="text" name="number" class="form-control" >
                <label for="">Message</label>
                <input type="text" name="message" class="form-control" >

                <div>
                    <button class="btn btn-outline-info">Send</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection