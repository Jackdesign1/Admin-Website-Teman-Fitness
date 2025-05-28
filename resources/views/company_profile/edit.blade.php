@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Company Profile</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('company.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Perusahaan</label>
            <input type="text" name="name" value="{{ old('name', $profile->name ?? '') }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" required>{{ old('description', $profile->description ?? '') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" name="address" value="{{ old('address', $profile->address ?? '') }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="text" name="phone" value="{{ old('phone', $profile->phone ?? '') }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email', $profile->email ?? '') }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('company.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
