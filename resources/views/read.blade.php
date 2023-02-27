@extends('main')

@section('title')
    {{ $title }}
@endsection

@section('body')
    @if (session()->has('create'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('create') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session()->has('update'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('update') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session()->has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('delete') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <h1>{{ $title }}</h1>
    <a class="btn btn-primary" href="/create" role="button">Tambah</a>
    <table class="table">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        @foreach ($content as $c)
        <tr>
            <td>{{ $c->nama }}</td>
            <td>{{ $c->nim }}</td>
            <td>{{ $c->kelas }}</td>
            <td>
                <form action="/update/{{ $c->id }}" method="GET" class="d-inline">
                    <button class="btn btn-warning">Ubah</button>
                </form>
                <form action="/delete/{{ $c->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection