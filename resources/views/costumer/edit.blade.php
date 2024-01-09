@extends('layouts.app')

@section('content')
    <h2>Edit Costumer</h2>

    <form action="{{ url('costumer/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">nama</label>
            <input type="text" name="nama"  class="form-control" value="{{ $row->nama }}">
        </div>
        <div class="mb-3">
            <label for="">email_customer</label>
            <input type="text" name="email_customer" class="form-control" value="{{ $row->email_customer }}">
        </div>
        <div class="mb-3">
            <label for="">alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $row->alamat }}">
        </div>
        <div class="mb-3">
            <label for="">no_telp</label>
            <input type="text" name="no_telp"  class="form-control" value="{{ $row->no_telp }}">
        </div>
        <div class="mb-3">
            <label for="">kelamin</label>
            <input type="text" name="kelamin" class="form-control" value="{{ $row->kelamin }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
