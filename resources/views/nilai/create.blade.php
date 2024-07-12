@extends('app')

@section('content')
<div class="card">
    <div class="card-header">
        Create New Nilai
    </div>
    <div class="card-body">
        <form action="{{ route('nilai.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="alternatif_id">Nama Alternatif:</label>
                <select name="alternatif_id" id="alternatif_id" class="form-control">
                    @foreach ($alternatifs as $alternatif)
                    <option value="{{ $alternatif->id }}">{{ $alternatif->nama_alternatif }}</option>
                    @endforeach
                </select>
            </div>
            @foreach ($kriterias as $kriteria)
            <div class="form-group">
                <label for="nilai_{{ $kriteria->id }}">{{ $kriteria->nama_kriteria }}:</label>
                <input type="text" name="nilai[{{ $kriteria->id }}]" id="nilai_{{ $kriteria->id }}" class="form-control">
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Create Nilai</button>
        </form>
    </div>
</div>
@endsection
