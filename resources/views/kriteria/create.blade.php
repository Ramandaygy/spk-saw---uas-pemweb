@extends('app')

@section('title', 'Create New Kriteria')

@section('content')
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-4">Create New Kriteria</h1>
        
        <form action="{{ route('kriteria.store') }}" method="POST" class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 bg-white shadow-md rounded-lg border-2 border-gray-300">
            @csrf

            <div class="mb-4">
                <label for="nama_kriteria" class="block text-gray-700 text-sm font-bold mb-2">Nama Kriteria:</label>
                <input type="text" id="nama_kriteria" name="nama_kriteria" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="atribut" class="block text-gray-700 text-sm font-bold mb-2">Atribut:</label>
                <input type="text" id="atribut" name="atribut" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="bobot" class="block text-gray-700 text-sm font-bold mb-2">Bobot:</label>
                <input type="number" id="bobot" name="bobot" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Create
                </button>
                <a href="{{ route('kriteria.index') }}" class="bg-green-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Kembali
                </a>
            </div>
        </form>
    </div>
@endsection
