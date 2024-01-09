@extends('layouts.app')
@section('content')

<h2>Costumer</h2>

<a href="{{ url('costumer/create') }}" class="btn btn-primary mb-3 float-end">Tambah Costumer</a>

<table class="table table-bordered">
      <tr>
            <th>ID</th>
            <th>nama</th>
            <th>email_customer</th>
            <th>alamat</th>
            <th>no_telp</th>
            <th>kelamin</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->nama }}</td>
                  <td>{{ $row->email_customer }}</td>
                  <td>{{ $row->alamat }}</td>
                  <td>{{ $row->no_telp }}</td>
                  <td>{{ $row->kelamin }}</td>
                  <td><a href="{{ url('costumer/edit/' . $row->id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('costumer/' . $row->id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection