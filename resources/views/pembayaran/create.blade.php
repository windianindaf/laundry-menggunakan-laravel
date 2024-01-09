@extends('layouts.app')

@section('content')
    <h2>Tambah Pembayaran</h2>

    <form action="{{ url('pembayaran') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="costumer_id">Costumer</label>
            <select class="form-control" name="costumer_id" id="costumer_id">
                <option value="">-- Pilih --</option>
                @foreach($costumer as $costumerltem)
                    <option value="{{ $costumerltem->id }}">{{ $costumerltem->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="pemesanan_id">Pemesanan</label>
            <select class="form-control" name="pemesanan_id" id="pemesanan_id">
                <option value="">-- Pilih --</option>
                @foreach($pemesanan as $pemesananItem)
                    <option value="{{ $pemesananItem->id }}">{{ $pemesananItem->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <input type="text" name="metode_pembayaran" id="metode_pembayaran" class="form-control">
        </div>

        <div class="mb-3">
            <label for="tgl_pembayaran">Tanggal Pembayaran</label>
            <input type="date" name="tgl_pembayaran" id="tgl_pembayaran" class="form-control">
        </div>

        <div class="mb-3">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control">
        </div>

        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
