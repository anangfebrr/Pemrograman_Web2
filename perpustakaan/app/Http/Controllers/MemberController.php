<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('admin.member.member', [
            'members' => $members
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // validasi form input
                $validated = $request->validate([
                    'name' => 'required|min:5|max:20',
                    'email' => 'required|email',
                    'gender' => 'required|in:Pria,Wanita',
                    'status' => 'required',
                    'address' => 'required'
                ]);
        
                // simpan data ke dalam table books
                member::create($validated);
                return redirect('/member');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //mencari data berdasarkan id
        $member = Member::find($id);
        $member->delete();
        return redirect('/member');
    }
}
