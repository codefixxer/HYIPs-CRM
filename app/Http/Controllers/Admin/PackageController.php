<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function create()
    {
   
        return view('admin.pages.packages.create');



    }

    public function index()
    {
        // Fetch all packages from the database
        $packages = Package::all(); // You can use pagination if you want to limit results
        
        // Return the view with all packages
        return view('admin.pages.packages.index', compact('packages'));
    }

        // Delete a package
        public function destroy($id)
        {
            // Find the package by ID and delete it
            $package = Package::findOrFail($id);
            $package->delete();
    
            // Redirect back to the package list with success message
            return redirect()->route('admin.packages.index')->with('success', 'Package deleted successfully!');
        }



    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'package_name' => 'required|string|max:255',
            'investment_amount' => 'required|numeric|min:1',
            'profit_percentage' => 'required|numeric|min:0',
            'description' => 'required|string',
        ]);

        // Create the new package
        Package::create([
            'package_name' => $request->package_name,
            'investment_amount' => $request->investment_amount,
            'profit_percentage' => $request->profit_percentage,
            'description' => $request->description,
        ]);

        // Redirect back to the package list with success message
        return redirect()->route('admin.packages.index')->with('success', 'Package created successfully!');
    }




     // Show the form to edit an existing package
     public function edit($id)
     {
         // Find the package by ID
         $package = Package::findOrFail($id);
 
         // Return the edit view with the package data
         return view('admin.pages.packages.create', compact('package'));
     }
 
     // Update an existing package
     public function update(Request $request, $id)
     {
         // Validate the input data
         $request->validate([
             'package_name' => 'required|string|max:255',
             'investment_amount' => 'required|numeric|min:1',
             'profit_percentage' => 'required|numeric|min:0',
             'description' => 'required|string',
         ]);
 
         // Find the package by ID and update the values
         $package = Package::findOrFail($id);
         $package->update([
             'package_name' => $request->package_name,
             'investment_amount' => $request->investment_amount,
             'profit_percentage' => $request->profit_percentage,
             'description' => $request->description,
         ]);
 
         // Redirect back to the package list with success message
         return redirect()->route('admin.packages.index')->with('success', 'Package updated successfully!');
     }










}
