<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{




    public function index()
    {
        // Fetch all users from the database
        $users = User::all();

        // Return the view with users data
        return view('admin.pages.users.index',  compact('users'));
    }


    public function destroy($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Delete the user
        $user->delete();

        // Redirect to the user index page with a success message
        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }











}
 