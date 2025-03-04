@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Petugas</h2>

    <form action="{{ route('officers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Jabatan</label>
            <input type="text" name="position" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('officers.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
