@extends('layouts.app')

@section('content')
    <h2>tambah pemesanan</h2>

    <form action="{{ url('pemesanan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">jenis</label>
            <input type="text" name="jenis" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">berat</label>
            <input type="text" name="berat" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">tgl_pemesanan</label>
            <input type="date" name="tgl_pemesanan" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">tgl_ambil</label>
            <input type="date" name="tgl_ambil" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
