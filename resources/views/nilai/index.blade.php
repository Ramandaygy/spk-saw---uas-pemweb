@extends('app')

@section('title', $title)

@section('content')
    <div class="card">
        <div class="table-responsive m-0">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        @foreach ($kriterias as $kriteria)
                            <th>{{ $kriteria->nama_kriteria }}</th>
                        @endforeach
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nilais as $key => $value)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $alternatifs[$key]->nama_alternatif ?? '' }}</td>
                            @foreach ($value as $k => $v)
                                <td>{{ $v }}</td>
                            @endforeach
                            
                            <td>
                                <a href="{{ route('kriteria.edit', $kriteria->id_kriteria) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('kriteria.destroy', $kriteria->id_kriteria) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('nilai.create') }}" class="btn btn-success mt-3">Create New Nilai</a>
        </div>
    </div>
@endsection