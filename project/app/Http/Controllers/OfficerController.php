<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function index()
    {
        $officers = Officer::all();
        return view('officers.index', compact('officers'));
    }

    public function create()
    {
        return view('officers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:officers,email',
            'phone' => 'nullable|string|max:15',
            'position' => 'required|string|max:255'
        ]);

        Officer::create($request->all());
        return redirect()->route('officers.index')->with('success', 'Officer berhasil ditambahkan');
    }

    public function edit(Officer $officer)
    {
        return view('officers.edit', compact('officer'));
    }

    public function update(Request $request, Officer $officer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:officers,email,' . $officer->id,
            'phone' => 'nullable|string|max:15',
            'position' => 'required|string|max:255'
        ]);

        $officer->update($request->all());
        return redirect()->route('officers.index')->with('success', 'Officer berhasil diperbarui');
    }

    public function destroy(Officer $officer)
    {
        $officer->delete();
        return redirect()->route('officers.index')->with('success', 'Officer berhasil dihapus');
    }
}
