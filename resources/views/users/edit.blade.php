@extends('layouts.app')

@section('content')
    <h2>Edit user</h2>

    <form action="{{ url('users/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="name" id="" class="form-control" value="{{ $row->name }}">
        </div>
        <div class="mb-3">
            <label for="">EMAIL</label>
            <input type="text" name="email" id="" class="form-control" value="{{ $row->email }}">
        </div>
        <div class="mb-3">
            <label for="">PASSWORD</label>
            <input type="text" name="password" id="" class="form-control" value="{{ $row->password }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection