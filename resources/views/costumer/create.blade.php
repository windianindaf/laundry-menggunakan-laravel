@extends('layouts.app')

@section('content')
    <h2>tambah costumer</h2>

    <form action="{{ url('costumer') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">nama</label>
            <input type="text" name="nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">email_customer</label>
            <input type="text" name="email_customer" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">alamat</label>
            <input type="text" name="alamat" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">no_telp</label>
            <input type="text" name="no_telp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">kelamin</label>
            <input type="text" name="kelamin" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
