@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Company Profile</h2>
    <table class="table">
        <tr>
            <th>Nama</th>
            <td>{{ $profile->name ?? 'Belum tersedia' }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $profile->description ?? 'Belum tersedia' }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $profile->address ?? 'Belum tersedia' }}</td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td>{{ $profile->phone ?? 'Belum tersedia' }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $profile->email ?? 'Belum tersedia' }}</td>
        </tr>
    </table>
    <a href="{{ route('company.edit') }}" class="btn btn-primary">Edit</a>
</div>
@endsection
