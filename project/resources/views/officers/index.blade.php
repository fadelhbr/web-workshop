@extends('layouts.app')

@section('title', 'Data Petugas')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Petugas Perpustakaan</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('officers.create') }}" class="btn btn-primary mb-3">Tambah Petugas</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($officers as $key => $officer)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $officer->name }}</td>
                    <td>{{ $officer->email }}</td>
                    <td>{{ $officer->phone }}</td>
                    <td>{{ $officer->position }}</td>
                    <td>
                        <a href="{{ route('officers.edit', $officer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('officers.destroy', $officer->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
