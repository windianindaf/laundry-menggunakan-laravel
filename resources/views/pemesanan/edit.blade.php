@extends('layouts.app')

@section('content')
    <h2>Edit pemesanan</h2>

    <form action="{{ url('pemesanan/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">jenis</label>
            <input type="text" name="jenis" id="" class="form-control" value="{{ $row->jenis }}">
        </div>
        <div class="mb-3">
            <label for="">berat</label>
            <input type="text" name="berat" id="" class="form-control" value="{{ $row->berat }}">
        </div>
        <div class="mb-3">
            <label for="">tgl_pemesanan</label>
            <input type="date" name="tgl_pemesanan" id="" class="form-control" value="{{ $row->tgl_pemesanan }}">
        </div>
        <div class="mb-3">
            <label for="">tgl_ambil</label>
            <input type="date" name="tgl_ambil" id="" class="form-control" value="{{ $row->tgl_ambil }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
