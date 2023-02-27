@extends('main')

@section('title')
    {{ $title }}
@endsection

@section('body')
    <h1>{{ $title }}</h1>
    <form action="/create" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama') }}">
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" required value="{{ old('nim') }}">
            @error('nim')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select class="form-select @error('kelas') is-invalid @enderror" id="kelas" name="kelas">
                <option selected disabled>Pilih Kelas</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>
            @error('kelas')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection