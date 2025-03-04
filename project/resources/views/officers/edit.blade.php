@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Petugas</h2>

    <form action="{{ route('officers.update', $officer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $officer->name }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $officer->email }}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="text" name="phone" class="form-control" value="{{ $officer->phone }}">
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Jabatan</label>
            <input type="text" name="position" class="form-control" value="{{ $officer->position }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('officers.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
