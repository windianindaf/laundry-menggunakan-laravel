@extends('layouts.app')

@section('content')
    <h2>Add User</h2>

    <form action="{{ url('users') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="name" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">EMAIL</label>
            <input type="text" name="email" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">PASSWORD</label>
            <input type="text" name="password" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
    @endsection