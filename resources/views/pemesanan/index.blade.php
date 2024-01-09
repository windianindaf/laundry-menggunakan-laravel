@extends('layouts.app')
@section('content')

<h2>Pemesanan</h2>

<a href="{{ url('pemesanan/create') }}" class="btn btn-primary mb-3 float-end">tambah pemesanan</a>

<table class="table table-bordered">
      <tr>
            <th>ID</th>
            <th>jenis</th>
            <th>berat</th>
            <th>tgl_pemesanan</th>
            <th>tgl_ambil</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->jenis }}</td>
                  <td>{{ $row->berat }}</td>
                  <td>{{ $row->tgl_pemesanan }}</td>
                  <td>{{ $row->tgl_ambil }}</td>
                  <td><a href="{{ url('pemesanan/edit/' . $row->id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('pemesanan/' . $row->id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection