<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Ambil hanya user dengan role 'member'
        $members = User::where('role', 'member')->get();

        // Perbarui status otomatis berdasarkan end_date
        foreach ($members as $member) {
            if (Carbon::now()->greaterThan($member->end_date)) {
                $member->status = 'inactive'; // Sesuaikan dengan nilai status di view (active/inactive)
                $member->save();
            }
        }

        // Hitung statistik hanya untuk user dengan role 'member'
        $totalMembers = User::where('role', 'member')->count();
        $activeMembers = User::where('role', 'member')->where('status', 'active')->count();
        $inactiveMembers = User::where('role', 'member')->where('status', 'inactive')->count();

        // Data untuk tabel, hanya user dengan role 'member'
        $users = $members;

        return view('home', compact('totalMembers', 'activeMembers', 'inactiveMembers', 'users'));
    }
}
