<?php

// app/Http/Controllers/Admin/UserPackageController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserPackage;
use App\Models\User;
use App\Models\Package;
use Illuminate\Http\Request;

class UserPackageController extends Controller
{
    // Display all user packages
    public function index()
    {
        $userPackages = UserPackage::with('user', 'package')->get(); // Eager load user and package data
        return view('admin.pages.user_packages.index', compact('userPackages'));
    }

    // Show form to create a new user package
    public function create()
    {
        $users = User::all(); // Get all users
        $packages = Package::all(); // Get all packages
        return view('admin.pages.user_packages.create', compact('users', 'packages'));
    }

    // Store a new user package
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'package_id' => 'required|exists:packages,id',
            'investment_amount' => 'required|numeric|min:1',
            'status' => 'required|in:active,completed,withdrawn',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
        ]);

        // Create the new user package
        UserPackage::create([
            'user_id' => $request->user_id,
            'package_id' => $request->package_id,
            'investment_amount' => $request->investment_amount,
            'status' => $request->status,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        // Redirect back with success message
        return redirect()->route('admin.user_packages.index')->with('success', 'User package created successfully!');
    }

    // Show form to edit a user package
    public function edit($id)
    {
        $userPackage = UserPackage::findOrFail($id);
        $users = User::all();
        $packages = Package::all();
        return view('admin.pages.user_packages.create', compact('userPackage', 'users', 'packages'));
    }

    // Update an existing user package
    public function update(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'package_id' => 'required|exists:packages,id',
            'investment_amount' => 'required|numeric|min:1',
            'status' => 'required|in:active,completed,withdrawn',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
        ]);

        // Find the user package and update it
        $userPackage = UserPackage::findOrFail($id);
        $userPackage->update([
            'user_id' => $request->user_id,
            'package_id' => $request->package_id,
            'investment_amount' => $request->investment_amount,
            'status' => $request->status,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        // Redirect back with success message
        return redirect()->route('admin.user_packages.index')->with('success', 'User package updated successfully!');
    }

    // Delete a user package
    public function destroy($id)
    {
        $userPackage = UserPackage::findOrFail($id);
        $userPackage->delete();

        // Redirect back with success message
        return redirect()->route('admin.user_packages.index')->with('success', 'User package deleted successfully!');
    }
}
