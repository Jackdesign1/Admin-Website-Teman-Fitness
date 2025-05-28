@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Form Pendaftaran Member</h2>

    {{-- ALERT VALIDASI & SUKSES --}}
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

    <form action="{{ route('members.store') }}" method="POST" id="memberForm">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">No. HP</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="start_date" class="form-label">Tanggal Mulai</label>
            <input type="text" class="form-control" id="start_date" name="start_date" value="{{ now()->format('Y-m-d') }}" readonly required>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Durasi Keanggotaan</label>
            <select class="form-control" id="duration" name="duration" required>
                <option value="30">1 Bulan (30 Hari)</option>
                <option value="90">3 Bulan (90 Hari)</option>
                <option value="180">6 Bulan (180 Hari)</option>
                <option value="365">1 Tahun (365 Hari)</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="end_date" class="form-label">Tanggal Berakhir</label>
            <input type="text" class="form-control" id="end_date" name="end_date" readonly required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="active">Aktif</option>
                <option value="inactive">Tidak Aktif</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Daftar</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const startDateInput = document.getElementById('start_date');
        const endDateInput = document.getElementById('end_date');
        const durationSelect = document.getElementById('duration');

        // Set start date ke hari ini saat halaman dimuat
        startDateInput.value = new Date().toISOString().split('T')[0];

        // Fungsi untuk menghitung end date
        function calculateEndDate() {
            const startDate = new Date(startDateInput.value);
            const duration = parseInt(durationSelect.value);
            const endDate = new Date(startDate);
            endDate.setDate(startDate.getDate() + duration);
            endDateInput.value = endDate.toISOString().split('T')[0];
        }

        // Hitung end date saat start date atau durasi berubah
        startDateInput.addEventListener('change', calculateEndDate);
        durationSelect.addEventListener('change', calculateEndDate);

        // Hitung end date pertama kali saat halaman dimuat
        calculateEndDate();
    });
</script>
@endsection
