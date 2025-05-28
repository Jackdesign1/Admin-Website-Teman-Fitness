<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;

class CompanyProfileController extends Controller
{
    // Menampilkan Company Profile di halaman utama website (publik)
    public function public()
    {
        $profile = CompanyProfile::first(); // Ambil data pertama (asumsi satu entri)
        return view('company_profile.public', compact('profile'));
    }

    // Menampilkan Company Profile untuk admin
    public function index()
    {
        $profile = CompanyProfile::first(); // Ambil data pertama untuk admin
        return view('company_profile.index', compact('profile'));
    }

    // Menampilkan form edit untuk admin
    public function edit()
    {
        $profile = CompanyProfile::first(); // Ambil data pertama untuk diedit
        if (!$profile) {
            $profile = new CompanyProfile(); // Buat entri baru jika belum ada
        }
        return view('company_profile.edit', compact('profile'));
    }

    // Memperbarui data company profile
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $profile = CompanyProfile::first();
        if (!$profile) {
            CompanyProfile::create($request->all());
        } else {
            $profile->update($request->all());
        }

        return redirect()->route('company.index')->with('success', 'Profil perusahaan berhasil diperbarui!');
    }
}
