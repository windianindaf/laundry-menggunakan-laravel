@extends('layouts.app')

@section('content')

<h2>Pembayaran</h2>

<a href="{{ url('pembayaran/create') }}" class="btn btn-primary mb-3 float-end">Tambah Pembayaran</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Costumer ID</th>
        <th>Pemesanan ID</th>
        <th>Metode Pembayaran</th>
        <th>Tanggal Pembayaran</th>
        <th>Jumlah</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    @foreach ($rows as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->costumer_id }}</td>
            <td>{{ $row->pemesanan_id }}</td>
            <td>{{ $row->metode_pembayaran }}</td>
            <td>{{ $row->tgl_pembayaran }}</td>
            <td>{{ $row->jumlah }}</td>
            <td><a href="{{ url('pembayaran/' . $row->id . '/edit') }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('pembayaran/' . $row->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                </form>
            </td>
        </tr>
    @endforeach

</table>

@endsection
