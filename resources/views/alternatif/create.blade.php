@extends('app')

@section('content')
<div class="card">
    <div class="card-header">{{ $title }}</div>
    <div class="card-body">
        <form action="{{ route('alternatif.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_alternatif">ID Alternatif:</label>
                <input type="text" name="id_alternatif" id="id_alternatif" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama_alternatif">Nama Alternatif:</label>
                <input type="text" name="nama_alternatif" id="nama_alternatif" class="form-control">
            </div>
            <button type="submit" class="btn btn-success mt-3">Create</button>
            <a href="{{ route('alternatif.index') }}" class="bg-green-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Kembali
                </a>
        </form>
    </div>
</div>
@endsection
