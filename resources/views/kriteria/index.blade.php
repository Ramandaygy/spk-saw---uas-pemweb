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
                        <th>atribut</th>
                        <th>bobot</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kriterias as $kriteria)
                        <tr>
                            <td>{{$kriteria->id_kriteria}}</td>
                            <td>{{$kriteria->nama_kriteria}}</td>
                            <td>{{$kriteria->atribut}}</td>
                            <td>{{$kriteria->bobot}}</td>

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
            <a href="{{ route('kriteria.create') }}" class="btn btn-success mt-3">Create New Kriteria</a>
        </div>
    </div>


@endsection

