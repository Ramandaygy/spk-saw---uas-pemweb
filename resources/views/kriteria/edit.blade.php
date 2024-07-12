@extends('app')

@section('title', $title)

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Edit Kriteria</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('kriteria.update', $kriteria->id_kriteria) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="nama_kriteria">Nama Kriteria:</label>
                    <input type="text" id="nama_kriteria" name="nama_kriteria" class="form-control" value="{{ $kriteria->nama_kriteria }}">
                </div>
                
                <div class="form-group">
                    <label for="atribut">Atribut:</label>
                    <input type="text" id="atribut" name="atribut" class="form-control" value="{{ $kriteria->atribut }}">
                </div>
                
                <div class="form-group">
                    <label for="bobot">Bobot:</label>
                    <input type="text" id="bobot" name="bobot" class="form-control" value="{{ $kriteria->bobot }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
