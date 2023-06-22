@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Movies Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Movies</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Movies Data
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" method="POST" action="/movies">
                @csrf
                <div>
                    <label for="judul">Title:</label><br>
                    <input type="text" id="judul" name="judul"><br><br>
                </div>
                <div>
                    <label for="poster">Poster:</label><br>
                    <input type="file" id="poster" name="poster"><br><br>
                </div>
                <div>
                    <label for="genre">Genre:</label><br>
                    <select id="genre" name="genre_id"><br><br>
                        @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
                        @endforeach
                    </select><br><br>
                </div>
                <div>
                    <label for="negara">Country:</label><br>
                    <input type="text" id="negara" name="negara"><br><br>
                </div>
                <div>
                    <label for="tahun">Year:</label><br>
                    <input type="text" id="tahun" name="tahun"><br><br>
                </div>
                <div>
                    <label for="rating">Rating:</label><br>
                    <input type="text" id="rating" name="rating"><br><br>
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection