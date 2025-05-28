@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Member</h2>
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

        <form action="{{ route('members.update', $member->id) }}" method="POST" id="memberForm">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" value="{{ $member->name }}" class="form-control" id="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="{{ $member->email }}" class="form-control" id="email">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" value="{{ $member->phone }}" class="form-control" id="phone">
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label">Tanggal Mulai</label>
                <input type="text" class="form-control" id="start_date" name="start_date" value="{{ $member->start_date }}" readonly required>
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">Tanggal Berakhir</label>
                <input type="text" class="form-control" id="end_date" name="end_date" value="{{ $member->end_date }}" readonly required>
            </div>

            <div class="mb-3">
                <label for="extend_duration" class="form-label">Perpanjang Keanggotaan</label>
                <select class="form-control" id="extend_duration" name="extend_duration">
                    <option value="0">Tidak Perpanjang</option>
                    <option value="30">1 Bulan (30 Hari)</option>
                    <option value="90">3 Bulan (90 Hari)</option>
                    <option value="180">6 Bulan (180 Hari)</option>
                    <option value="365">1 Tahun (365 Hari)</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Membership Status</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $member->end_date < now()->format('Y-m-d') ? 'inactive' : 'active' }}" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('members.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const endDateInput = document.getElementById('end_date');
            const extendDurationSelect = document.getElementById('extend_duration');
            const statusInput = document.getElementById('status');
            const today = new Date('2025-05-27'); // Tanggal hari ini (27 Mei 2025)

            // Fungsi untuk memperbarui end_date dan status
            function updateMembership() {
                const duration = parseInt(extendDurationSelect.value);
                let newEndDate;

                if (duration > 0) {
                    // Jika memilih perpanjang, gunakan end_date saat ini atau tanggal hari ini (mana yang lebih besar)
                    const currentEndDate = new Date(endDateInput.value);
                    const baseDate = currentEndDate < today ? today : currentEndDate;
                    newEndDate = new Date(baseDate);
                    newEndDate.setDate(baseDate.getDate() + duration);
                } else {
                    // Jika tidak perpanjang, gunakan end_date yang sudah ada
                    newEndDate = new Date(endDateInput.value);
                }

                // Format end_date ke YYYY-MM-DD
                endDateInput.value = newEndDate.toISOString().split('T')[0];

                // Perbarui status berdasarkan end_date
                statusInput.value = newEndDate < today ? 'inactive' : 'active';
            }

            // Panggil fungsi saat durasi berubah
            extendDurationSelect.addEventListener('change', updateMembership);

            // Panggil fungsi saat halaman dimuat untuk memastikan status awal
            updateMembership();
        });
    </script>
@endsection
