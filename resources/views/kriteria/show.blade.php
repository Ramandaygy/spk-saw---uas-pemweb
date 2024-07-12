@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Show Kriteria</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('kriteria.index') }}">Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card">
                    <div class="card-header">Detail Kriteria</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_kriteria">Nama Kriteria:</label>
                            <input type="text" id="nama_kriteria" class="form-control" value="{{ $kriteria->nama_kriteria }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="atribut">Atribut:</label>
                            <input type="text" id="atribut" class="form-control" value="{{ $kriteria->atribut }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="bobot">Bobot:</label>
                            <input type="text" id="bobot" class="form-control" value="{{ $kriteria->bobot }}" readonly>
                        </div>
                        <a href="{{ route('kriteria.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
