@extends('app')

@section('title', 'Edit Nilai')

@section('content')
    <div class="card">
        <div class="card-header">Edit Nilai</div>
        <div class="card-body">
            <form action="{{ route('nilai.update', $nilai->id_nilai) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="alternatif_id">Alternatif</label>
                    <select class="form-control" id="alternatif_id" name="alternatif_id" required>
                        @foreach ($alternatifs as $alternatif)
                            <option value="{{ $alternatif->id_alternatif }}" {{ $nilai->alternatif_id == $alternatif->id_alternatif ? 'selected' : '' }}>{{ $alternatif->nama_alternatif }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label