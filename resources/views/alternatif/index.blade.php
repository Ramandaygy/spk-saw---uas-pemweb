@extends('app')

@section('content')
<div class="card">
    <div class="table-responsive m-0">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Alternatif</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alternatifs as $alternatif)
                <tr>
                    <td>{{ $alternatif->id_alternatif }}</td>
                    <td>{{ $alternatif->nama_alternatif }}</td>
                    <td>
                        <a href="{{ route('alternatif.edit', $alternatif->id_alternatif) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('alternatif.destroy', $alternatif->id_alternatif) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('alternatif.create') }}" class="btn btn-success mt-3">Create New Alternatif</a>
    </div>
</div>
@endsection
