@extends('app')

@section('content')
<div class="card">
    <div class="card-header">{{ $title }}</div>
    <div class="card-body">
        <form action="{{ route('alternatif.update', $alternatif->id_alternatif) }}" method="POST">
            @csrf
            @method('PUT') <!-- Method untuk update -->

            <div class="form-group">
                <label for="id_alternatif">ID Alternatif:</label>
                <input type="text" name="id_alternatif" id="id_alternatif" class="form-control" value="{{ $alternatif->id_alternatif }}" readonly>
            </div>
            <div class="form-group">
                <label for="nama_alternatif">Nama Alternatif:</label>
                <input type="text" name="nama_alternatif" id="nama_alternatif" class="form-control" value="{{ $alternatif->nama_alternatif }}">
            </div>
            <button type="submit" class="btn btn-success mt-3">Update</button>
        </form>
    </div>
</div>
@endsection
