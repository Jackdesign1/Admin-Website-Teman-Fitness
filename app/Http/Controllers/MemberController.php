<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::where('role', 'member')->get();

        foreach ($members as $member) {
            if (Carbon::now()->greaterThan($member->end_date)) {
                $member->status = 'Expired'; // Sesuaikan dengan nilai status di view edit (Active/Expired)
                $member->save();
            }
        }

        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required',
            'email'      => 'required|email|unique:users,email',
            'phone'      => 'required',
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after:start_date',
            'status'     => 'required|in:active,inactive',
            'password'   => 'required|min:6'
        ]);

        User::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'password'   => bcrypt($request->password),
            'start_date' => $request->start_date,
            'end_date'   => $request->end_date, // Gunakan end_date dari request (sesuai form create sebelumnya)
            'status'     => $request->status,
            'role'       => 'member'
        ]);

        return redirect()->route('members.index')->with('success', 'Member berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $member = User::where('role', 'member')->findOrFail($id);
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'       => 'required',
            'email'      => 'required|email|unique:users,email,' . $id,
            'phone'      => 'required',
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after:start_date',
            'status'     => 'required|in:Active,Expired',
            'password'   => 'nullable|min:6'
        ]);

        $member = User::where('role', 'member')->findOrFail($id);

        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->start_date = $request->start_date;
        $member->end_date = $request->end_date;
        $member->status = $request->status;

        if ($request->password) {
            $member->password = bcrypt($request->password);
        }

        $member->save();

        return redirect()->route('members.index')->with('success', 'Member berhasil diperbarui.');
    }

    public function destroy($id)
    {
        try {
            $member = User::where('role', 'member')->findOrFail($id);
            $member->delete(); // Menggunakan soft delete
            return redirect()->route('members.index')->with('success', 'Member berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('members.index')->withErrors(['error' => 'Gagal menghapus member: ' . $e->getMessage()]);
        }
    }
}
