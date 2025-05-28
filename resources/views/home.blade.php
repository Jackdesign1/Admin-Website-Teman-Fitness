
@extends('layouts.app')

@section('content')
    <title>Teman Fitness - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1 0 auto;
        }
        footer {
            flex-shrink: 0;
        }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        .chart-container {
            position: relative;
            height: 400px;
            width: 100%;
            background-color: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            overflow: hidden;
            padding: 1rem;
        }
    </style>

    <!-- Statistik Section -->
    <section id="stats" class="py-16 bg-gradient-to-r from-gray-100 to-gray-200">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-10 tracking-tight">Statistik Anggota</h2>
            <div class="card-grid mb-12">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 flex items-center">
                        <i class="fas fa-users mr-2 text-blue-500"></i> Total Anggota
                    </h3>
                    <p class="text-3xl font-bold text-gray-900">{{ $totalMembers }}</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 flex items-center">
                        <i class="fas fa-check-circle mr-2 text-green-500"></i> Anggota Aktif
                    </h3>
                    <p class="text-3xl font-bold text-gray-900">{{ $activeMembers }}</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 flex items-center">
                        <i class="fas fa-times-circle mr-2 text-red-500"></i> Anggota Tidak Aktif
                    </h3>
                    <p class="text-3xl font-bold text-gray-900">{{ $inactiveMembers }}</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
                <h3 class="text-xl font-semibold text-gray-800 mb-4 text-center">Visualisasi Statistik</h3>
                <div class="chart-container">
                    <canvas id="memberChart"></canvas>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript untuk Chart.js -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('memberChart').getContext('2d');
            const memberChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Total Anggota', 'Anggota Aktif', 'Anggota Tidak Aktif'],
                    datasets: [{
                        label: 'Jumlah',
                        data: [{{ $totalMembers }}, {{ $activeMembers }}, {{ $inactiveMembers }}],
                        backgroundColor: ['#4B5EFC', '#10B981', '#EF4444'],
                        borderColor: ['#4B5EFC', '#10B981', '#EF4444'],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        },
                        x: {
                            ticks: {
                                font: {
                                    size: 14
                                }
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                font: {
                                    size: 14
                                }
                            }
                        }
                    },
                    maintainAspectRatio: false,
                    responsive: true
                }
            });
        });
    </script>
@endsection
